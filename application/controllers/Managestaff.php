<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managestaff extends CI_Controller {
    public function  __construct()
    {        
           parent::__construct();
           $this->load->helper('url');
           $this->load->model('Commonmodel');     

        
     }function load_roles(){
        $this->load->view("admin/AdminUsers/Roles",$data);
     }
     public function index() {
               $data['staff']=$this->Commonmodel->GenericFetchData("staff");             
               $this->load->view("admin/AdminUsers/allstaffs",$data);
     }
     function profile() {
               $staffid=$this->input->get("staffid");
               $this->db->select('*');  
                $this->db->from("staff");      
                $this->db->where("STAFF_ID",$staffid);     
                $query=$this->db->get();
                  if($query->num_rows()>0){
                   $data['profile']=$query->result();
                  } else {
                    return false;
                  }
               //$data['profile']=$this->commonModel->GenericFetchDataById($staffid,"staff","STAFF_ID");
               $this->load->view("admin/AdminUsers/Profile",$data);             
     }
     function UpdateStaff() {
              $data['USERNAME']      = $this->input->post('username');
              $data['ROLE']  = $this->input->post('role');
              $data['FIRSTNAME']    = $this->input->post('firstname');
              $data['LASTNAME']    = $this->input->post('lastname');
              $data['PHONENUMBER']    = $this->input->post('phonenumber');
              $data['EMAIL_ADDRESS']    = $this->input->post('emailaddress');
              $data['GENDER']    = $this->input->post('gender');
              $data['RESIDENCE']    = $this->input->post('residence');
              $data['STATUS']    = $this->input->post('status');
              $data['BRANCH_ID']    = $this->input->post('branch');
              $staffid=$this->input->post("staffid");
              $this->db->update("staff",$data);
              $this->db->where("STAFFID",$staffid);
              echo "success";
     }
     function addNewStaff(){
              $data['STAFF_ID']      = $this->input->post('staffid');
              $data['USERNAME']      = $this->input->post('username');
              $data['ROLE']  = $this->input->post('role');
              $data['FIRSTNAME']    = $this->input->post('firstname');
              $data['LASTNAME']    = $this->input->post('lastname');
              $data['PHONENUMBER']    = $this->input->post('phonenumber');
              $data['EMAIL_ADDRESS']    = $this->input->post('emailaddress');
              $data['GENDER']    = $this->input->post('gender');
              //$data['RESIDENT']    = $this->input->post('residence');
              $data['STATUS']    = $this->input->post('status');
              $data['PASSWORD']    = password_Hash($this->input->post('password'),PASSWORD_DEFAULT);
              $data['BRANCH_ID']    = $this->input->post('branch');
              $this->db->insert("staff",$data);
              if($this->db->affected_rows()>0) {
                echo "success";
              }
     }
     function deleteStaff(){
             if(isset($_POST["id"])){
                foreach ($_POST["id"] as $id ) {
                      $this->db->where("STAFFID",$id);
                      $this->db->delete("staff");
                      if($this->db->affected_rows()>0){
                          echo "success";
                      }
                  
                }

              }
      }
        
   
   
    
}
