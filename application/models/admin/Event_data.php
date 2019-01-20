<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_data extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
           $this->_table = "events";
    }
    public function getEvents() 
    {
        $query = $this->db->get($this->_table);
        return $query->result();
    }
}