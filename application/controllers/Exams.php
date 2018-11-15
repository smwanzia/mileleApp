<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller {
    public function  __construct()
    {
        
        parent::__construct();
           $this->load->helper('url');
           $this->load->model('commonModel');
          // $this->load->model('main_model');

        
     }
     public function index() {
        //load to index page
        $this->load->view("admin/index");
     }
     function loadExams(){

            $data['classlist']=$this->commonModel->GenericFetchData("classlist");
            $data['subject']=$this->commonModel->GenericFetchData("subject");
            $data['stream']=$this->commonModel->GenericFetchData("streams");
            $this->load->view("admin/ExamCenter/Exams",$data);

     }
     function loadStudentMarksConfirmationSheet(){
            $this->load->view("admin/ExamCenter/MarksConfirmationSheet",$data);
     }
     //function for loading both update marksheet and add marksheet
     function loadStudentMarkSheet(){
            $subject=$this->input->get("subjectid");
            $class=$this->input->get('classid');
            $stream=$this->input->get('streamid');
            $s['class']=$this->commonModel->get_class_name($class);
            $s['subject']=$this->commonModel->get_subject_name($subject);
            $s['subjectid']=$subject;
            $s['classid']=$class;
            $s['streamid']=$stream;
            $s['stream']=$this->commonModel->get_stream_name($stream);
            $this->session->set_userdata($s);

            $data['examtype']=$this->commonModel->GenericFetchData('exam_setting');
            $data['student_marksheet']=$this->commonModel->getStudentMarkSheet($subject,$class,$stream);

             $this->load->view("admin/ExamCenter/MarkSheet",$data);

    }
    //get update marksheet in order to update marks
    function loadUpdateMarkSheet(){
            $term=$this->input->get("term");
            $examtype=$this->input->get('examtype');
            $subject=$this->input->get('subject');
            $regno=$this->input->get('regno');
            $data['marks']=$this->commonModel->getStudentMarksBySubject($term,$examtype,$subject,$regno);
            $this->load->view("admin/ExamCenter/UpdateMarkSheet",$data);
            
    }
    function loadProcessMarkSheet(){
          $this->load->view("admin/ExamCenter/ExamProcessingSheet");

    }
     function SubmitMarks(){
             $data['classlist']=$this->commonModel->GenericFetchData("classlist");
             $data['subject']=$this->commonModel->GenericFetchData("subject");
             $data['stream']=$this->commonModel->GenericFetchData("streams");
             $this->load->view("admin/ExamCenter/SubmitMarks",$data);

     }
     function updateMarks(){
             $data['student']=$this->commonModel->GenericFetchData('student');
             $data['subject']=$this->commonModel->GenericFetchData('subject');
             $data['exam']=$this->commonModel->GenericFetchData('exam_setting');
             $this->load->view("admin/ExamCenter/UpdateMarks",$data);

     }
     //function for adding multiple student marks
     function AddMarks(){
            //$data["MARKS_OBTAINED"]=$_POST["marks"];
            //$data["STUDENT_REGNO"]=$_POST['regno'];
            $marks=$_POST["marks"];
            $regno=$_POST['regno'];
            $subject=$_POST['subjectid'];
            $exam_title=$_POST['exam_title'];
            $year=$_POST['year'];
            $classid=$_POST['classid'];
            $streamid=$_POST['stream'];
            $term=$_POST['term'];

            $a=array_combine($regno, $marks);
            print_r($a);
            //print_r($regno);

            $result = array();
            foreach($marks as $key=>$val){ // Loop though one array
                $val2 = $regno[$key]; // Get the values from the other array
                //$result[$key] = $val + $val2; // combine 'em
                $this->db->query("INSERT INTO marks VALUES(NULL,'$val2','$subject','$classid','$exam_title','$val',NULL,'$term','$year','$streamid')");
            }
          
           
         }
         //function for adding marks for single student
    function AddSingleMarks(){
            $data['MARKS_OBTAINED']=$_POST["marks"];
            $data['STUDENT_REGNO']=$_POST['regno'];
            $data['SUBJECTID']=$_POST['subjectid'];
            $data['EXAMID']=$_POST['exam_title'];
            $data['YEAR']=$_POST['year'];
            $data['CLASSID']=$_POST['classid'];
            $data['STREAMID']=$_POST['stream'];
            $data['TERM']=$_POST['term'];
            $this->db->insert("marks",$data);
            echo "success";

    }
    
    function UpdateStudentMarks(){
            $regno=$_POST['regno'];
            $marks=$_POST["marks"];
           /* $subjectid=$_POST['subjectid'];
            $examid=$_POST['exam_title'];
            $year=$_POST['year'];
            $term=$_POST['term'];*/
             foreach($marks as $key=>$val){ // Loop trhough one array
                $val2 = $regno[$key]; // Get the values from the other array
                   /* $this->db->update("marks",$data);
                    $this->db->where("STUDENT_REGNO",'3434');
                    $this->db->where("YEAR",'2018');
                    $this->db->where("TERM",'Term 1');
                    $this->db->where("SUBJECTID",'3');
                    if($this->db->affected_rows()>0){
                        echo "marks succesfully updated";
                    }*/
                $this->db->query("UPDATE marks SET  MARKS_OBTAINED='$val' WHERE STUDENT_REGNO='3434' AND EXAMID='11' AND YEAR='2018' AND TERM='Term 1' AND SUBJECTID='3'");
                echo "marks succesfully updated";
            }
       
    }
    function loadRawMarksForm(){
          $data['classlist']=$this->commonModel->GenericFetchData("classlist");
          $data['exam']=$this->commonModel->GenericFetchData('exam_setting');
          $this->load->view("admin/ExamCenter/GetRawMarksForm",$data);


    }
    //function for laoding unprocessed marks or raw marks
    function loadRawMarkSheet(){
            $class=$this->input->get("classid");
            $term=$this->input->get("term");
            $year=$this->input->get("year");
            $examid=$this->input->get("examid");
            $data['marksheet']=$this->commonModel->getRawMarks($class,$term,$year);
                //print_r($data);
               
            $this->load->view("admin/ExamCenter/RawMarkSheet",$data);
    }
    function ProcessExam(){
        //select exam type  from exam setting 
       $data=$this->commonModel->GenericFetchData("exam_setting");
       foreach ($data as $key ) {
           $exam=$key->examid;
            //get exam setting id from marks  and check if it matches with id from exam setting
            $query=$this->db->get_where('marks',array('EXAMID'=>'11'));
                $res=$query->result_array();
                foreach ($res as $row) {
                    $mrks_examid=$row['EXAMID'];
                }
                //if exam id matches ,select marks associated with that id
                $marks=$this->commonModel->GenericFetchData('marks');


       }

              
               // print_r($marks);
         $this->load->view("admin/ExamCenter/ResultSheet",$data);
        



    }
        
   
   
    
}
