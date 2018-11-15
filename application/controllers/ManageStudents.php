<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageStudents extends CI_Controller {
      public function  __construct()
      {
        
        parent::__construct();
           $this->load->helper('url');
           $this->load->model('studentModel');
           $this->load->model('commonModel');
      }

     public function studentlist(){
      
       //get all school subject
        $data['subject']=$this->commonModel->GenericFetchData("subject");

        //select classess
        $data['class']=$this->commonModel->GenericFetchData("classlist");
        $data['stream']=$this->commonModel->GenericFetchData("streams");

        //get all student info
        $data["student"]=$this->studentModel->getStudentsInfo();
        $this->load->view("admin/StudentCenter/Students",$data);
     }
     //loadStudentProfile
     public function loadStudentProfile(){
           $id=$this->input->get("regno");
           //get student subject
           $subjects=$this->studentModel->getStudentDoingSubjects($id);
           //get student info
           $query=$this->studentModel->getStudentByInfoId($id);
           $data['student']=null;
           if($query){
               $data['student']=$query;
               $data['subjects']=$subjects;
            }
           $this->load->view("admin/StudentCenter/studentprofile",$data);
     }
     public function AddStudent(){

              $data['USERNAME']      = $this->input->post('username');
              $data['CLASSID']    = $this->input->post('classid');
              $data['STREAMID']  = $this->input->post('streamid');
              $data['FIRSTNAME']    = $this->input->post('firstname');
              $data['LASTNAME']    = $this->input->post('lastname');
              $data['PHONENUMBER']    = $this->input->post('phonenumber');
              $data['EMAILADDRESS']    = $this->input->post('emailaddress');
              $data['GENDER']    = $this->input->post('gender');
              $data['STUDENT_REGNO']    = $this->input->post('regno');
              $data['PARENTNAME']    = $this->input->post('parentname');
              $data['DORMITORYID']    = $this->input->post('dormitoryid');
              $data['STATUS']    = $this->input->post('status');
              $data['SCHOOLID']    = $this->input->post('schoolid');
              $data['KCPE_MARKS']    = $this->input->post('kcpemarks');
              $data['KCPE_INDEXNO']    = $this->input->post('indexno');
               //  $data['PHONENUMBER']    = $this->input->post('alternatephonenumber');
              $data['ADDRESS']    = $this->input->post('residence');

              //add student info
              $tablename="student";      
              $this->db->insert($tablename, $data);  
              if($this->db->affected_rows()>0){
                  $q;
                 //GET STUDENT SUBJECTLIST and loop through while adding
                  $subjectname=$_POST["subjects"];
                  foreach($subjectname as $key=>$val){ // Loop though one array
                    $studentregno=$this->input->post('regno');
                    $q=$this->db->query("INSERT INTO student_subjects VALUES(NULL,'$studentregno','$val',NULL)");

                  }
                  $data2["CLASSLISTID"]=$this->input->post('classid');
                  $data2['STUDENT_REGNO']    = $this->input->post('regno');
                  $data2['YEAR']= date('Y');
                  $data2["TERM"]=$this->input->post('term');
                 
                      if($q>0){
                        //assign student classess
                         $this->db->insert("student_classes",$data2);
                         echo "success";
                      }
                     else{
                      echo "Errror in inserting subjects";
                     }

              }                           
                      
     }
     function updateStudent(){

              $data['USERNAME']      = $this->input->post('username');
              $data['CLASSID']    = $this->input->post('classid');
              $data['STREAM']  = $this->input->post('stream');
              $data['FIRSTNAME']    = $this->input->post('firstname');
              $data['LASTNAME']    = $this->input->post('lastname');
              $data['PHONENUMBER']    = $this->input->post('phonenumber');
              $data['EMAILADDRESS']    = $this->input->post('emailaddress');
              $data['GENDER']    = $this->input->post('gender');
              $data['REGNO']    = $this->input->post('regno');
              $data['PARENTNAME']    = $this->input->post('parentname');
              $data['DORMITORYID']    = $this->input->post('dormitoryid');
              $data['STATUS']    = $this->input->post('status');
              $data['SCHOOLID']    = $this->input->post('schoolid');


              $tablename="student";
            
              $query=$this->studentModel->updateStudentDetails($data,$id);
               if($query){
                  echo "success";
                
               }else{
                  echo "error";
               }
     }
     function selectStudentById(){
          $studentid=$this->input->post("studentid");
         // $id=json_decode($studentid);
          $data['student']=$this->studentModel->selectStudentById($studentid);
          
     }
     function deleteStudent(){
             if(isset($_POST["id"])){         
             foreach ($_POST["id"] as $id) {
                 $this->db->where("STUDENT_REGNO","$id");
                 $this->db->delete("student");                 
                  //$this->commonModel->genericDelete("STUDENT_REGNO","student",$id);
             }
             //if($this->db->affected_rows()>0){
                   // echo "success";
                
            // }else{
                    echo "success";
            // }

          }
         
     }
     public function Classlist(){
            $this->db->select('*');  
            $this->db->from('classes');
            $this->db->join('classlist', 'classes.CLASSLISTID=classlist.CLASSLISTID','inner');
            $this->db->join('streams', 'classes.STREAMID=streams.STREAMID','inner');
            $query=$this->db->get();
              if($query->num_rows()>0){
                 $data=$query->result();
              } else {
                return false;
           }
           $current_year=date('Y');
          /* foreach ($data as $key ) {
             # code...
                  $classid=$key->CLASSLISTID;
                  
                  $streamid=$key->STREAMID;
                   //print_r($streamid);
                    $q=$this->db->query("SELECT COUNT(CLASSLISTID) AS TOTALSTUDENT FROM  student_classes WHERE CLASSLISTID='1' AND STREAMID='1' AND  YEAR='$current_year'");
                  if($q->num_rows()>0){
                    $data['studenttotal']=$q->result();
                  }
                 
           }*/
           
           $data["classlist"]=$data;
          
           //$data['classlist']=$this->commonModel->GenericFetchData("classes");
           $this->load->view("admin/StudentCenter/Classlist",$data);
     }
     public function ClassSheet(){
               $classid=$this->input->get("classid");
               $streamid=$this->input->get("streamid");
               $data['classsheet']=$this->commonModel->getClassSheet($classid,$streamid);
             // print_r($streamid);
               $this->load->view("admin/StudentCenter/StudentClassSheet",$data);
     }
     public function Subjectlist(){
             $data['subject']=$this->commonModel->GenericFetchData("subject");

             $this->load->view("admin/StudentCenter/Subjectlist",$data);
     }
    public   function AddSubject(){
              $data['SUBJECTNAME']=$this->input->post("subjectname");
              $this->db->insert("subject",$data);
              if($this->db->affected_rows()>0){
                echo "succcess";
              }
     }


     public function studenttransfer(){

     }

      public function studentleave(){

      }  
      //function to load promotion form
      public function loadStudentPromotion(){
              $data['class']=$this->commonModel->GenericFetchData('classlist');
              $data['stream']=$this->commonModel->GenericFetchData('streams');
              $this->load->view("admin/StudentCenter/StudentPromotion",$data);

      }
      //function toto get student to be promoted  to next class
      public function loadstudentpromotionSheet(){
               $classid=$this->input->get("classid");
               $data['promote']=$this->commonModel->getStudentPromoted($classid);
               $data['class']=$this->commonModel->GenericFetchData('classlist');
               // $this->session->set_userdata($classid);
                
               $this->load->view("admin/StudentCenter/PromoteStudents",$data);
      }
      //function to promote student to next class
      public function promoteStudents(){
              $next_class=$this->input->post("class");
              $streamid=$this->input->post("streamid");
              $regno=$_POST["regno"];;
              $year=$this->input->post("year");
              $one="1";
              $current_year=$year+$one;
              if(isset($regno)){
                foreach ($regno as $std_reg ) {
                  # code...
                  $this->db->query("INSERT INTO student_classes VALUES(NULL,'$next_class','$streamid','$std_reg','promoted',NULL,'$current_year',NULL,NULL)");

                  $this->db->query("UPDATE student SET CLASSID='$next_class' STATUS='Active' ");
                }

              }
               echo "success,student successfully promoted";
      }
      
   
   
    
}