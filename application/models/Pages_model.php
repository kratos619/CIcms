<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model
{
 
    public function __construct(){
        $this->load->database();
    } 

    // get all details

    public function get_pages()
    {
       $query = $this->db->get('pages');
        return $query->result();

    }

    public function create_page($data)
    {
        return $this->db->insert('pages',$data);
    }
    
    
}

