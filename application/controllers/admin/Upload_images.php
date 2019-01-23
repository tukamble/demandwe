<?php

class Upload_images extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Images');
        
    }
    
    public function index() {
        $images = $this->Images->fetchImages();
        $this->load->view('admin/images',['images'=>$images]);
    }
    public function gallery() {
        $images = $this->Images->fetchImages();
        $this->load->view('admin/Gallery_img',['images'=>$images]);
    }
    public function uploadPic(){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                
                $this->load->library('upload',$config);
                $this->load->library('form_validation');
                if (! $this->upload->do_upload())
                {
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/AddEventimage', $error);
                }else{
                    $post = $this->input->post();
                    $data = $this->upload->data();
                    echo '<pre>';
                    print_r($data);
                    die();
                    $image_path= base_url("uploads/".$data['raw_name'].$data['file_ext']);
                    $post['image_path']=$image_path;
                    if($this->Images->setImage($post)){
                        echo "succesfully uploaded";
                    } else {
                        echo 'try again';
                    }
                    
                }
        }
        public function delete() {
            $id = $this->uri->segment(3);
            $data = $this->Images->deleteImg($id);
            print_r($data);die();
            redirect('admin/Upload_images','refresh');
        }
}

