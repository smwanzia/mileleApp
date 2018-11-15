<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function  __construct()
    {        
        parent::__construct();         
                 
     }
     public function index() {
            $data["branches"]=$this->Commonmodel->GenericFetchData("branches");
            $data["schemes"]=$this->Commonmodel->GenericFetchData("schemes");
            $data["scheme_type"]=$this->Commonmodel->GenericFetchData("scheme_type");
            $data["branch"]=$this->Commonmodel->GenericFetchData("branches");
            //$data["scheme_type"]=$this->Commonmodel->GenericFetchData("scheme_type");
             $this->load->view("pages/member_registrationform",$data);
     }
     public function members(){
            $this->load->view("pages/member_registrationform");
     } 

    function jsonSearchCounty() {        
        $result = $this->Commonmodel->json_search_county($_GET['term']);
        if (count($result) > 0) {
        foreach ($result as $row)
          $arr_result[] = array(
          'label' => $row->COUNTY_NAME,
          'county_id' => $row->COUNTY_ID,
        );
          echo json_encode($arr_result);
          
        }
    }
    function jsonSearchConstituency() {
        $result = $this->Commonmodel->json_search_constituency($_GET['term']);
        if (count($result) > 0) {
        foreach ($result as $row)
          $arr_result[] = array(
          'label' => $row->CONSTITUENCY_NAME,
          'constituency_id' => $row->CONSTITUENCY_ID,
        );
          echo json_encode($arr_result);
        }
    }
    function jsonSearchWard(){
        $result = $this->Commonmodel->json_search_destination($_GET['term']);
        if (count($result) > 0) {
        foreach ($result as $row)
          $arr_result[] = array(
          'label' => $row->WARD_NAME,
          'ward_id' => $row->WARD_ID,
        );
          echo json_encode($arr_result);
        }
    }
     function jsonSearchVillage(){
        $result = $this->Commonmodel->json_search_destination($_GET['term']);
        if (count($result) > 0) {
        foreach ($result as $row)
          $arr_result[] = array(
          'label' => $row->destination_name,
        );
          echo json_encode($arr_result);
        }
    }

        
   
   
    
}