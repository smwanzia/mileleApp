<?php if(!defined("BASEPATH")) exit("No direct script allowed");

//common model for holding common model functions
class FinanceModel extends CI_Model {
	//generic function for fetching data
	function GetStudentStatement($regno)
	{		
		      $this->db->select("*");
              $this->db->from("student_finance");
         	  $this->db->where("REGNO",$regno);
              $this->db->join("student","student.STUDENT_REGNO=student_finance.REGNO","inner");
              $this->db->join("classlist","student.CLASSID=classlist.CLASSLISTID","inner");
              $query=$this->db->get();
					if($query->num_rows()>0){
						return $query->result();
					} else {
						return false;
					}
              //  if($qw->num_rows()>0){
             // $query=$qw->result();
	         //return $query;
	}

}
