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
        $this->db->join('subjects','subjects.id = pages.subject_id');
       $query = $this->db->get('pages');
        return $query->result();

    }

    // get page by id

    public function get_page_by_id($id)
    {
        $this->db->where('id',$id);
     //   $this->db->join('subjects','subjects.id = pages.subject_id');
        $query = $this->db->get('pages');
        return $query->row();
    }

    public function create_page($data)
    {
        return $this->db->insert('pages',$data);
    }

    public function update_page($id,$data)
    { 
        $this->db->where('id',$id);
       $this->db->update('pages',$data);
       return true;
    }
    
    public function delete_page($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('pages');
        return true;

    }
    
}

