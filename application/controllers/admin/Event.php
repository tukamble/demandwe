<?php
class Event extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        
        $this->load->model("admin/Event_data");
        $this->load->model('Images');
        $this->load->library('session');
    }
    function index() 
    { 
        //$this->load->view("admin/add_event");
        $events['event'] = $this->Event_data->eventList();
        $this->load->view("admin/posts_list",$events);
    }
    
    public function upload() 
    {
        $config =[
            'upload_path'=>'./uploads/',
            'allowed_types'=>'gif|jpg|png|jpeg'
        ];
        $this->load->library('upload',$config);
        $this->load->library('form_validation');
        $this->form_validation->set_rules("event_title","event_title","required");
        $this->form_validation->set_rules("event_catagory","event_catagory","required");        
        $this->form_validation->set_rules("event_content","event_content","required");
        if ( $this->form_validation->run() === false) {
            $this->load->view("admin/add_event");
        } else {
            if ( ! $this->upload->do_upload('event_image')){
                
                $upload_error = $this->upload->display_errors();
                $this->load->view("admin/add_event", compact('upload_error'));
            } else {
                
                    $post = $this->input->post();
                    $data = $this->upload->data();
                    $image_path= base_url("uploads/".$data['raw_name'].$data['file_ext']);            
                    $post['image_path']=$image_path;
                  
                    $query = $this->Event_data->uploadtImage($post);
                    if ($query){
                        $message = '<div class="alert alert-success alert-dismissible ">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>successfully!</strong> uploaded Image</div>';
                        $this->session->set_flashdata("message",$message);
                        redirect('admin/Event/upload','refresh');
                    } else {
                       
                        $message = '<div class="alert alert-danger alert-dismissible ">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> Something went wrong</div>';
                        $this->session->set_flashdata("message",$message);
                    }
            }
                    
        }
    }
}