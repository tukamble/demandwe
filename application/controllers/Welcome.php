<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('SuperUser');
    }
    public function index()
    {
        $data['images'] = $this->SuperUser->fetchImages();
        $this->load->view('site/home',$data);
    }
    
    public function about() {
        $this->load->view('site/about_us');
    }
    
    public function contact() 
    {
        $this->load->view('site/contact');
    }
    
    public function program() 
    {
        $this->load->view('site/program');
    }
    
    public function events() 
    {
        $this->load->view('site/events');
    }
    
    public function calender() 
    {
        $this->load->view('site/calender');
    }
    
    public function gallery() 
    {
        $this->load->view('site/gallery');
    }
    
    public function blog() 
    {
        $this->load->view('site/blog');
    }
    public function faq(){
        $this->load->view('site/faq');
    }
    public function problem(){
        $this->load->view('site/problem');
    }
}
 