<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects_model extends CI_Model 
{
    public function __construct(){
        $this->load->database();
    }

    public function get_list(){
        $query = $this->db->get('subjects');
        return $query->result();
    }

    public function create_subject(){
        $data = array(
            'name' => $this->input->post('name')
        );

        return $this->db->insert('subjects',$data);

    }


    public function delete_subjects($id){
        $this->db->where('id',$id);
        $this->db->delete('subjects');
        return true;
    }


}

