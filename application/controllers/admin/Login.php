<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        if (isset($this->session->userdata['userid'])){
            redirect("admin/Dashboard","refresh");
//            redirect('Welcome','refresh');
        }
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('SuperUser');
        
    }
    public function index() {
        $this->form_validation->set_rules("username","Username","required",["required" => "Enter Username"]);
        $this->form_validation->set_rules("password","Password","required",["required" => "Enter Password"]);
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ( $this->form_validation->run() === false ) {
            $this->load->view('admin/signin');
        } else {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $adminuser = $this->SuperUser->getUsrBYUsrname($username);
            if($password==$adminuser->password){
                $sessData =[
                    "userid"=>$adminuser->id,
                    'username'=>$adminuser->username
                ];
                $this->session->set_userdata($sessData);
                redirect("admin/Dashboard","refresh");   
            }else {
                $message = '<div class="alert alert-danger alert-dismissible ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error!</strong> Invalid username or pasword.</div>';
                $this->session->set_flashdata("message",$message);
                redirect('admin/Login');
            }
            
        }
        
    }
    public function test() {
        $this->load->view('admin/Dashboard');
    }
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
    
}

