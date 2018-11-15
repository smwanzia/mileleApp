<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {
    public function  __construct()
    {
        
        parent::__construct();
           $this->load->helper('url');
           $this->load->model('commonModel');
           $this->load->model('studentModel');
           $this->load->model('FinanceModel');

        
     }
     public function index() {
            //load to index page
            $this->load->view("admin/index");
     }
     //get batch invoice form
     function loadBatchInvoiceForm(){
             $data['classlist']=$this->commonModel->GenericFetchData("classlist");
             $this->load->view("admin/FinanceCenter/BatchInvoice",$data);

     }
     //get invoice form
     function loadSingleInvoiceForm(){
              //get all student info
             $data["student"]=$this->studentModel->getStudentsInfo();
             $this->load->view("admin/FinanceCenter/SingleInvoice",$data);

     }
     //get student payment form
     function LoadReceivePaymentForm(){
             $data['student']=$this->commonModel->GenericFetchData('student');
             $this->load->view("admin/FinanceCenter/ReceivePayment",$data);

     }
     //get student statement form
     function loadStudentStatement(){
             $data['classlist']=$this->commonModel->GenericFetchData("classlist");
             $data['stream']=$this->commonModel->GenericFetchData("streams");
             $data['student']=$this->commonModel->GenericFetchData('student');
             $this->load->view("admin/FinanceCenter/StudentStatement",$data);
    }
    function printStudentSatetement(){
        //$reg=$this->session->userdata("regno");
        $this->load->library("Myfpdf");
        $this->load->view("admin/FinanceCenter/StudentStatementPdf");
    }

     function Invoice($param1){
      //invoice all student based on selected class and term
       if($param1=="BatchInvoice"){
              
              $class= $this->input->post('class');
              $term= $this->input->post('term');
              $description= $this->input->post('description');

              $data['TERM']= $this->input->post('term');
              $data["CLASSID"]=$class;
              $date=date('Y');
              $data['YEAR']= date('Y');
              //get invoice amount from fee structure
              $q=$this->db->query("SELECT AMOUNT FROM fee_structure WHERE CLASS='$class' AND  TERM='$term' AND YEAR='$date'");
              $result=$q->result_array();
              foreach ($result as $row ) 
                $data['INVOICEAMOUNT'] = $row["AMOUNT"];
              
              $data['AMOUNTPAID']="0.00";
              //get all students from selected class
              $query=$this->db->get_where('student',array('CLASSID'=>$class));
              $res=$query->result_array();
              //loop through the students while invoicing
              foreach ($res as $row ) {
                $data['REGNO']=$row['STUDENT_REGNO'];
                $this->db->insert("student_finance",$data);
              }
              echo 'success';
      }
      if($param1=="SingleInvoice"){
              $data['AMOUNTPAID']="0.00";
              //invoice single student 
              $data['INVOICEAMOUNT']=$this->input->post('invoice_amount');
              $data['DESCRIPTION']= $this->input->post('description');
              $data['TERM']= $this->input->post('term');
              $data['DATE']= date('M Y');
              $data['YEAR']= date('Y');
              $data['REGNO']=$this->input->post('regno');
              $this->db->insert('student_finance',$data);
              echo "success";

      }
      if($param1=="ReceivePayment"){
        //student making payment
              $data["REGNO"]= $this->input->post('regno');
              $data["AMOUNTPAID"]= $this->input->post('invoice_amount');
              $data["TERM"]=$this->input->post('term');
              $data["YEAR"]=date('Y');
              $data["DATE"]=date('M Y');
              $data["REFERENCE"]=$this->input->post('reference');
              $data["MODE"]=$this->input->post('payment_type');
              $data["DESCRIPTION"]=$this->input->post('reference');
              $query=$this->db->get_where("student",array('STUDENT_REGNO'=>$this->input->post('regno')));
              $q=$query->result_array();
              foreach ($q as $key) ;
                $data["CLASSID"]=$key["CLASSID"];
                $data["STREAMID"]=$key["STREAMID"];
              $this->db->insert("student_finance",$data);
              if($this->db->affected_rows()>0){
                echo "payment made successfully...";
              }
      }
      if($param1=="StudentStatement"){
             // $regno=$_POST["regno"];
              $data1["REGNO"]= $this->input->post('regno');
              $regnod= $this->input->post('regno');
              $query=$this->FinanceModel->GetStudentStatement($regnod);
                  //echo json($query);
               //}    
             //$regno=$this->input->post("regno");
              //get invoice and amount paid from finance and calculate total
              //$query=$this->db->get_where('student_finance',array('REGNO'=>$regno));
             // $res=$query->result_array();
             // $query=$this->commonModel->genericSelectDataById($student_id,"student_finance","REGNO");
              $data['finance']=null;
              if($query){
                $data['finance']=$query;
              }
              $credittotal=0;
              $debittotal=0;
              $lastname="";
              $firstname="";
              $classid="";
             if(!empty($query)) { foreach ( $query as $row) {
                      # code...
                      $credittotal+=$row->INVOICEAMOUNT;
                      $debittotal+=$row->AMOUNTPAID;
                      $firstname=$row->FIRSTNAME;
                      $lastname=$row->LASTNAME;
                      $classid=$row->CLASS;
                     
              }
            }
              $balance=$debittotal-$credittotal;
              $finance=array();
              $finance["credit"]=$credittotal;
              $finance['debit']= $debittotal;
              $finance['bal']= $balance;
              $finance['lastname']=$lastname;
              $finance['firstname']=$firstname;
              $finance['classid']=$classid;
              $finance['regno']=$regnod;
              $this->session->set_userdata($finance);
             //echo $balance;
              $this->load->view("admin/FinanceCenter/ViewStudentStatement",$data);  
                      
      }
       if($param1=="ClassStatement"){
              $class= $this->input->post('class');
              $stream= $this->input->post('stream');
              $term= $this->input->post('term');
              $this->db->select("*");
              $this->db->from("student_finance");
              $this->db->where("student_finance.CLASSID",$class);
              $this->db->where("student_finance.STREAMID",$stream);
              $this->db->where("student_finance.TERM",$term);
              $this->db->join("student","student.STUDENT_REGNO=student_finance.REGNO","inner");
              $query=$this->db->get();
              if($query->num_rows()>0){
                $result=$query->result();
              } else {
                return false;
              }
              $credittotals=0;
              $debittotals=0;
               if(!empty($result)) { foreach ( $result as $row) {
                      # code...
                      $credittotals+=$row->INVOICEAMOUNT;
                      $debittotals+=$row->AMOUNTPAID;
                     // $firstname=$row->FIRSTNAME;
                     // $lastname=$row->LASTNAME;
                     // $classid=$row->CLASSID;
                     
              }
            }
              $data["finance"]=$result;
              $balances=$debittotals-$credittotals;
              $finance=array();
              $finance["credits"]=$credittotals;
              $finance['debits']= $debittotals;
              $finance['bals']= $balances;
              $this->load->view("admin/FinanceCenter/ViewClassStatement",$data);  
            

              
      }
    }


     

        
   
   
    
}
