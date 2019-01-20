<?php

class Images extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->_table='image_gallery';
    }
    public function setImage($data) {
        $query = $this->db->insert('image_gallery',$data);
        return$query;
    }
    public function fetchImages() {
        $query = $this->db->get('image_gallery');    
        return $query->result();     
    }
    public function deleteImg($id) {
        $this->db->delete($this->_table,array('id'=>$id));
        return;
    }
}

