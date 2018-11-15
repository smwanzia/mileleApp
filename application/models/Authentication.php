
<?php if(!defined("BASEPATH")) exit("No direct script allowed");

//common model for holding common model functions
class Authentication extends CI_Model {
    
    public function loginUser($username, $password){
       
       $query = $this->db->get_where('staff', array('USERNAME' => $username));   
        if($query->num_rows()>0){            
            $userArr = array();
            foreach($query->result() as $row){
                $userArr[0] = $row->USERNAME;
                $userArr[1] = $row->EMAIL_ADDRESS;  
                $userArr[2] = $row->STATUS;  
                $userArr[3] = $row->PASSWORD;  
                $userArr[4] = $row->BRANCH_ID;             
                
            }
            $userData = array(
                'username' => $userArr[0],
                'email' => $userArr[1],  
                'status' => $userArr[2],  
                'password' => $userArr[3], 
                'branch_id' => $userArr[4],           
                'logged_in'=> TRUE
            ); 
         $this->session->set_userdata($userData); 
            //get user branch name
          $branch = $this->db->get_where('branches', array('BRANCH_ID' => $this->session->userdata("branch_id")));
          if($branch->num_rows()>0){
             foreach ($branch->result() as $value) 
             $this->session->set_userdata("branch_name",$value->BRANCH_NAME);

          }       
            return $query->result();
        }else{
            return false;
        }
    }
}
?>




