<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
            if (!isset($this->session->userdata['userid'])){
                redirect('admin/Login','refresh');
            }
            $this->load->model('SuperUser');
    }
    public function index() {
        $this->load->view('admin/Dashboard');
    }
    public function do_upload(){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('userfile'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/upload', $error);
                }else{
                    $post = $this->input->post();
                    $data = $this->upload->data();
                    $image_path= base_url("uploads/".$data['raw_name'].$data['file_ext']);
                    $post['image_path']=$image_path;
                    if($this->SuperUser->getImage($post)){
                        echo "succesfully uploaded";
                    } else {
                        echo 'try again';
                    }
                    $data = array('upload_data' => $this->upload->data());
                    $this->load->view('admin/success', $data);
                }
        }
        public function viewImages() {
            echo 'kk';
            
        }
    }