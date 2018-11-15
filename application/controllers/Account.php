<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    public function  __construct()
    {
        
        parent::__construct();
           $this->load->helper('url');
           $this->load->model('Authentication');           
     }
     public function index() {
        //load to index page
        $this->load->view("admin/login");
     }
     public function admin() {
        //load to index page
        $this->load->view("admin/index");
     }
     function login(){
            $username=$this->input->post("username");
            $raw_password=$this->input->post("password");
            $hashed_pass=password_hash($raw_password,PASSWORD_DEFAULT);
            $result=$this->Authentication->loginUser($username,$hashed_pass);
            //print_r($result);
            $this->session->set_userdata("hash",$hashed_pass);
           if($result){ 
                $status=$this->session->userdata("status");
                $stored_username=$this->session->userdata("username");
                $stored_password=password_verify($raw_password,$this->session->userdata("password"));
                if( $status=="Inactive"){                    
                    $this->session->set_flashdata('login_err', '<div class="alert alert-danger text-center">
                    your account is inactive,contact system administrator. </div>');
                    $this->load->view("admin/login.php");
                }else if($stored_username!=$username) {
                    $this->session->set_flashdata('login_err', '<div class="alert alert-danger text-center">
                    Invalid username </div>');
                    $this->load->view("admin/login.php");
                     //redirect to home                   
                    //redirect(base_url().'index.php/Start/','refresh');
                   
                }else if($stored_password!=$hashed_pass){
                  
                      $this->session->set_flashdata('login_err', '<div class="alert alert-danger text-center">
                      Invalid password </div>');
                      $this->load->view("admin/login.php");
                                     
                       //$this->load->view("admin/index");
                }else{
                      //successful login,redirect to admin
                      redirect(base_url().'Account/admin','refresh'); 

                }
                //add user to session
                /*foreach($result as $user) {
                        $s=array();
                        $s["email"]=$user->email;
                        $s["username"]=$user->username;                               
                        $this->session->set_userdata($s);
                } */                        
                return true;
               
            }else{                          
                $this->session->set_flashdata('login_err', '<div class="alert alert-danger text-center">
                Incorrect username or password. </div>');
                    $this->load->view("admin/login.php");
                    return false;
                 //   echo $this->session->userdata("username");
            }                      

      }
      function logout(){
              $this->load->driver('cache'); 
              $this->session->sess_destroy(); 
              $this->cache->clean();  
              ob_clean(); 
              redirect(base_url().'Account','refresh'); 
      }

     
   }