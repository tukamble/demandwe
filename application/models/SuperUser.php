<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperUser extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->_table ='super_users';
        
    }
    
    public function getUsrBYUsrname($username) {
         
        $query = $this->db->get_where($this->_table,['username'=>$username]);
        return $query->row();
    }
    
    public function getImage($data) {
        return $query = $this->db->insert('images',$data);
    }
    public function fetchImages() {
        $query = $this->db->get('images');
        
            return $query->result();
        
    }
}

