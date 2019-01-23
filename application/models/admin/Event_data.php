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
    /*
     * 
     */
    public function uploadtImage($data) 
    {
        return $query = $this->db->insert($this->_table,$data);
    }/*
     * 
     */
    public function eventList() 
    {
        $query = $this->db->get('events');
        return $query->result();
    }
    /*
     * 
     */
    public function getBlogimage() 
    {
        $query = $this->db->get_where('events',array('event_catagory'=>'blog'));
        return $query->result();
    }
    /*
     * 
     */
    public function getBlogimageById($id) 
    {
        $query = $this->db->get_where('events',array('id'=>$id));
        return $query->result();
    }
    /*
     * 
     */
    public function getGalleryimage() 
    {
        $query = $this->db->get_where('events',array('event_catagory'=>'gallery'));
        return $query->result();
    }
    /*
     * 
     */
    public function getProgramimage() 
    {
        $query = $this->db->get_where('events',array('event_catagory'=>'program'));
        return $query->result();
    }
}