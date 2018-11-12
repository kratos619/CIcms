<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function get_users()
    {
        //$this->db->join('subjects','subjects.id = pages.subject_id');
       $query = $this->db->get('users');
        return $query->result();

    }

    public function create_user($data)
    {

        return $this->db->insert('users',$data);

    }

    public function get_user_by_id($id){
         $this->db->where('id',$id);
     //   $this->db->join('subjects','subjects.id = pages.subject_id');
        $query = $this->db->get('users');
        return $query->row();  
    }

    public function update_user($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('users',$data);
       return true;
    }

    public function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
        return true;
    }

    public function login_user($username,$password)
    {
        $query = $this->db->get('users' ,array(
            'username' => $username,
            //'password' => $password
        ));
        
             $result = $query->row_array();
            
            if (password_verify($password, $result['password'])) {
                return $result['id'];
            } else {
                return false;
            }             
    }

}
