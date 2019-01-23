<?php

class Blog_posts extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("admin/Event_data");
    }
    public function Single_BlogImage($id) 
    {
        $data['images'] = $this->Event_data->getBlogimageById($id);
        $this->load->view('site/subsite/blog_posts',$data);
    }
}

