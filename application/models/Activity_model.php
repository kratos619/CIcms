<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_model extends CI_Model 
{
    public function __construct(){
        $this->load->database();
    }

    public function get_list(){
        $this->db->order_by('create_date','desc');
        $query = $this->db->get('activity');

        return $query->result();
    }

    public function add_Activity($activity_data){
        return $this->db->insert('activity',$activity_data);
    }


}

