<?php if(!defined("BASEPATH")) exit("No direct script allowed");

//common model for holding common model functions
class commonModel extends CI_Model {

//generic save function
	function genericSave($tablename,$data)
	{
	    $this->db->insert($tablename, $data);
	    if($this->db->affected_rows()>0)
	    {
	       echo "1";
		 }
		else
		{
		   echo "0";
		}
	  	 
	}

	//generic function for fetching data
	function GenericFetchData($table)
	{
		
		  $this->db->select("*");
	      $this->db->from($table);
	      $query = $this->db->get();
	      return $query->result();
	}


		//generic fetch using inner joins
	function FetchData()
		{
				$this->db->select('*');  
				$this->db->from('adminusers');
				$this->db->join('userrole', 'adminusers.ROLEID=userrole.ROLEID','inner');
				//$this->db->join('table3', 'table1.id = table3.id', 'inner');
			   // $this->db->where("ROLESTATUS","Open");
				
				$query=$this->db->get();

					if($query->num_rows()>0){
						return $query->result();
					} else {
						return false;
					}


		}
    function GenericFetchDataById($id,$table,$colid)
		{			
			$this->db->select('*');  
			$this->db->from($table);			
			$this->db->where($colid,$id);			
			$query=$this->db->get();
				if($query->num_rows()>0){
					return $query->result();
				} else {
					return false;
				}
		}
		function SelectNextofKin($memberid)
		{			
			  $this->db->select('*');  
              $this->db->from("nextof_kin");      
              $this->db->where("MEMBER_ID",$memberid);     
              $query=$this->db->get();
                if($query->num_rows()>0){
                  return $query->result();
                } else {
                  return false;
                } 
		}
		function SelectMemberByStatus($status)
		{			
			  $this->db->select('*');  
              $this->db->from("members");   
              $this->db->join('schemes', 'schemes.SCHEME_ID=members.SCHEME_ID','inner'); 
              $this->db->join('scheme_type type', 'type.SCHEME_TYPE_ID=members.SCHEME_TYPE','inner');   
              $this->db->where("STATUS",$status);     
              $query=$this->db->get();
                if($query->num_rows()>0){
                  return $query->result();
                } else {
                  return false;
                } 
		}


	function FetchDataById($id)
		{			
				$this->db->select('*');  
				$this->db->from('adminusers');
				$this->db->join('userrole', 'adminusers.ROLEID=userrole.ROLEID','inner');
				//$this->db->join('table3', 'table1.id = table3.id', 'inner');
				$this->db->where("USERID",$id);
				//$this->db->where("PASSWORD",$password);
				$query=$this->db->get();

					if($query->num_rows()>0){
						return $query->result();
					} else {
						return false;
					}

		}
	function json_search_constituency($title){
			$this->db->select("*");
			//$this->db->like("destination_name",$destn);
			$this->db->like("CONSTITUENCY_NAME",$title,'both');
			$this->db->order_by("CONSTITUENCY_NAME");
		    $this->db->limit(20);
			return $this->db->get('constituency')->result();		
	}
	function json_search_county($title){
		$this->db->like('COUNTY_NAME', $title , 'both');
		$this->db->order_by('COUNTY_NAME', 'ASC');
		//$this->db->group_by('COUNTY_NAME');
	    $this->db->limit(10);
		return $this->db->get('county')->result();
	}	
	function json_search_ward($title){

		$this->db->select("*");
		//$this->db->like("destination_name",$destn);
		$this->db->like("WARD_NAME",$title,'both');
		$this->db->order_by("WARD_NAME");
	    $this->db->limit(20);
		return $this->db->get('ward')->result();		
	}
		
		
		function get_class_name($class_id)
		{
				$query	=	$this->db->get_where('classlist' , array('CLASSLISTID' => $class_id));
				$res	=	$query->result_array();
				foreach($res as $row)
					return $row['CLASS'];
		}
		function get_subject_name($subject_id)
		{
				$query	=	$this->db->get_where('subject' , array('SUBJECTID' => $subject_id));
				$res	=	$query->result_array();
				foreach($res as $row)
					return $row['SUBJECTNAME'];
		}
		function get_stream_name($stream){
				$query=$this->db->get_where('streams',array('STREAMID'=>$stream));
				$res=$query->result_array();
				foreach ($res as $row) {
					return $row['STREAM'];
				}
		}

		function genericSelectDataById($id,$tablename,$colmnId)
		{
			
				$this->db->select('*');  
				$this->db->from($tablename);
				$this->db->where($colmnId,$id);
				$query=$this->db->get();

				if($query->num_rows()>0){
					return $query->result();
				} else {
					return false;
				}


		}
	

	//generic function for fetching data
	function FetchDataByStatus($table,$colname,$status)
	{
		$this->db->where($colname,$status);
		$query=$this->db->get($table);
		if($query->result()){
			
			$result=$query->result();
			//echo json_encode($result);
			return $query->result();

		}
	}

	//generic function for deleting data
	function genericDelete($tblcolumn,$table,$data)
	{
		
		$this->db->where($tblcolumn,$data);
		$this->db->delete($table);
		if($this->db->affected_rows()>0){
			echo 'success';
		 }
		  else
		 {
			echo 'error';
		}


	}

	//function generic update
	function genericUpdateData($tblcolumn,$table,$data,$id)
	{
	
	  	$this->db->where($tblcolumn,$id);
	  	$this->db->update($table,$data);
	  	if($this->db->affected_rows()>0)
	    {
	      	 echo '1';
	     }
	    else
	     {
	      		echo '0';
	    }
	}

	//generic function for changing menu status
	function genericChangeMenuStatus($id,$data,$table,$tblcolumnid,$tblcolumnstatus)
	{
	    $this->db->set($tblcolumnstatus, $data);
	  	$this->db->where($tblcolumnid,$id);
	  	$this->db->update($table);
	  	if($this->db->affected_rows()>0)
	    {
	      		return true;
	     }
	     else
	      {
	      		return false;
	    }
	}

	function Check_ifuUernameExist(){
		$this->db->where("username",$username);
		$result=$this->db->get('users');
		if($result->num_rows()>0){
			return true;
		}else{
			return false;
		}

	}

	function is_logged_in($username,$password){
		$this->db->select('*');  
		$this->db->from('adminusers');
		$this->db->join('userrole', 'adminusers.ROLEID=userrole.ROLEID','inner');
		//$this->db->join('table3', 'table1.id = table3.id', 'inner');
		$this->db->where("USERNAME",$username);
		$this->db->where("PASSWORD",$password);
		$query=$this->db->get();

			if($query->num_rows()>0){
				return $query->result();
			} else {
				return false;
			}

	}

}
?>