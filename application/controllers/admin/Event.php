<?php
class Event extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    
        $this->load->model("admin/Event_data");
    }
    function index() 
    {    
        $data["events"] = $this->Event_data->getEvents();
        //print_r($data);
        $this->load->view("admin/AddEventimage",$data);
//        $this->load->view("admin/AddEventimage");
    }
    
    public function upload() 
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("title","Image title","required");
    }
}