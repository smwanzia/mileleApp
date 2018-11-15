<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
    public function  __construct()
    {        
        parent::__construct();
           $this->load->helper('url');          
           //$this->load->model('Commonmodel');        
     }
     function profile(){
            $this->db->select('*');  
            $this->db->from("members"); 
            $this->db->join('schemes', 'schemes.SCHEME_ID=members.SCHEME_ID','inner');
            $this->db->join('branches', 'branches.BRANCH_ID = members.BRANCH_ID', 'inner');
            $this->db->join('scheme_type st', 'st.SCHEME_TYPE_ID = members.SCHEME_TYPE', 'inner');
              //$this->db->join('nextof_kin kin', 'kin.MEMBER_ID = members.MEMBER_ID', 'inner');
             // $this->db->join('county', 'county.COUNTY_ID = members.COUNTY_ID', 'inner');
             // $this->db->join('constituency co', 'co.CONSTITUENCY_ID = members.CONSTITUENCY', 'inner');
             // $this->db->join('ward', 'ward.WARD_ID = members.WARD', 'inner');           
            $this->db->where("MEMBER_ID",'8');           
            $query=$this->db->get();
                if($query->num_rows()>0){
                   $data['profile']=$query->result();
                } else {
                    return false;
                }  
          $data['kin']=$this->Commonmodel->SelectNextofKin("8");      
        $this->load->view("pages/member_profile",$data);
     }
     //function 
     public function index() {
        //load to index page
        //get memebers //personal information
        $data['USERNAME']      = $this->input->post('username');
        $data['SCHEME_ID']    = $this->input->post('schemeid');
        $data['SCHEME_TYPE']  = $this->input->post('schemetype');
        $data['FIRSTNAME']    = $this->input->post('pfirstname');
        $data['LASTNAME']    = $this->input->post('plastname');
        $data['PHONE']    = $this->input->post('pphonenumber');
        $data['EMAIL_ADDRESS']    = $this->input->post('pemailaddress');
        $data['GENDER']    = $this->input->post('gender');
        $data['NATIONAL_ID']    = $this->input->post('idNo');
        //$data['DATE_REGISTERED']    = date('Y M D');
        $data['DOB']    = $this->input->post('DOB');
        $data['STATUS']    = "pedding";
        $data['BRANCH_ID']    = $this->input->post('branch');
        $data['COUNTY_ID']    = $this->input->post('county1');
        $data['CONSTITUENCY']    = $this->input->post('constituency1');
        $data['VILLAGE']    = $this->input->post('village');
        $data['WARD']    = $this->input->post('ward1');
        $data['REGISTRATION_FEE']    = "300";
        $data['DATE_REGISTERED']    = date('d,m,y');
       // $data['REFERENCE']    = $this->input->post('reference');
        $this->db->insert("members", $data);
        if($this->db->affected_rows()>0)
        {
           //get inserted member id and insert next of kin
         // $da= $this->Commonmodel->GenericFetchDataById($this->input->post('username'),"members","MEMBER_ID");
            $this->db->select('*');  
            $this->db->from("members");            
            $this->db->where("username",$this->input->post('username'));           
            $query=$this->db->get();
                if($query->num_rows()>0){
                    $mb=$query->result();
                } else {
                    return false;
                }
         foreach ($mb as $value) 
             # code...
            $member_id=$value->MEMBER_ID;
            //insert next of kin
             //next of kin
            $data2['FIRSTNAME']    = $this->input->post('kin_firstname');
            //$data2['LASTNAME']    = $this->input->post('lastname');
            $data2['PHONE']    = $this->input->post('kin_phonenumber');
            $data2['EMAIL_ADDRESS']    = $this->input->post('kin_emailaddress');
            $data2['NATIONAL_ID']    = $this->input->post('kin_nationalId');
            $data2['MEMBER_ID']    =$member_id ;
            $this->db->insert("nextof_kin",$data2);
            if($this->db->affected_rows()>0){
                //insert beneficiary
                 //BENEFICIARY
                $data3['USERNAME']      = $this->input->post('ben_username');      
                $data3['DOB']  =      $this->input->post('ben_dob');
                $data3['FIRSTNAME']    = $this->input->post('ben_firstname');
                $data3['LASTNAME']    = $this->input->post('ben_lastname');
                $data3['PHONE']    = $this->input->post('ben_phonenumber');
                $data3['EMAIL_ADDRESS']    = $this->input->post('ben_emailaddress');        
                $data3['NATIONAL_ID']    = $this->input->post('ben_idNo');
                echo "1";

            }else{
                 echo "Errror";
            }         
         }
        else
        {
           echo "Errror Occured while processing data,keep trying";
        }

     }
     
     function registered_members(){
              $data['members']=$this->Commonmodel->GenericFetchData("members");
              $this->db->select('*');  
              $this->db->from('members');
              $this->db->join('schemes', 'schemes.SCHEME_ID=members.SCHEME_ID','inner');
              $this->db->join('branches', 'branches.BRANCH_ID = members.BRANCH_ID', 'inner');
              $this->db->join('scheme_type st', 'st.SCHEME_TYPE_ID = members.SCHEME_TYPE', 'inner');
              $query=$this->db->get();
                    if($query->num_rows()>0){
                        $data['members']=$query->result();
                    } else {
                        return false;
                    }
              $this->load->view("admin/members/registered",$data);
     }
     function approved_members(){
              $data["approved"]=$this->Commonmodel->SelectMemberByStatus("approved");
              $this->load->view("admin/members/approved",$data);
     }
     function pedding_members(){
               $data["pedding"]=$this->Commonmodel->SelectMemberByStatus("pedding");
              $this->load->view("admin/members/pedding",$data);
     }
     function eligible_members(){
              $data["eligible"]=$this->Commonmodel->SelectMemberByStatus("Eligible");
              $this->load->view("admin/members/eligible",$data);
     }
     function default_members(){
              $data["default"]=$this->Commonmodel->SelectMemberByStatus("default");
              $this->load->view("admin/members/default_members");
     }
     function adminmember_profile(){   
              $memberid=$this->input->get("membersid");
              $this->db->select('*');  
              $this->db->from('members');
              $this->db->join('schemes', 'schemes.SCHEME_ID=members.SCHEME_ID','inner');
              $this->db->join('branches', 'branches.BRANCH_ID = members.BRANCH_ID', 'inner');
              $this->db->join('scheme_type st', 'st.SCHEME_TYPE_ID = members.SCHEME_TYPE', 'inner');
              //$this->db->join('nextof_kin kin', 'kin.MEMBER_ID = members.MEMBER_ID', 'inner');
             // $this->db->join('county', 'county.COUNTY_ID = members.COUNTY_ID', 'inner');
             // $this->db->join('constituency co', 'co.CONSTITUENCY_ID = members.CONSTITUENCY', 'inner');
             // $this->db->join('ward', 'ward.WARD_ID = members.WARD', 'inner');
              $this->db->where("members.MEMBER_ID",$memberid);
              $query=$this->db->get();
                    if($query->num_rows()>0){
                        $data['profile']=$query->result();
                    } else {
                        return false;
                    }
            $data['kin']=$this->Commonmodel->SelectNextofKin($memberid);                   
        
      $this->load->view("admin/members/profile",$data);
     }
   }