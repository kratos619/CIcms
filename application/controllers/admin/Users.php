<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{
    public function index()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
	$data['user_details'] = $this->users_model->get_users();
		$this->template->load('admin','default','users/index',$data);
	}

	    public function add()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name ','trim|required');
		$this->form_validation->set_rules('username','This UserName  is Already Taken ','trim|required|min_length[4]|is_unique[users.username]');
		$this->form_validation->set_rules('email','This Email is Already Taken  ','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password  ','trim|required|min_length[4]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password','Password  ','trim|required|min_length[4]|matches[password]');
		//$this->form_validation->set_rules('order','Select Order ','required');
		
		if($this->form_validation->run() === false){
			//$data['subjects'] = $this->subjects_model->get_list();
		$this->template->load('admin','default','users/add');	
		}else{
		
			$password = $this->input->post('confirm_password');
			$username = $this->input->post('username'); 
			$options = [
                'cost' => 11
                ];
            $hash =  password_hash($password, PASSWORD_BCRYPT, $options);
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $username,
				'email' => $this->input->post('email'),
				'password' => $hash
			);

			// insert data to db 
			$this->users_model->create_user($data);
		//load activity
		$activity_data = array(
            'resource_id' => $this->db->insert_id(),
			'type' => 'Users',
			'action' => 'add',
			'user_id' => 1,
			'message' => 'New User ('. $data['username'] . ') Is Added' 		
		);
		// cal activity model
		$this->activity_model->add_Activity($activity_data);
		 redirect('admin/users');
		}
	
	}


	    public function edit($id)
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		//$this->template->load('admin','default','users/edit');
	$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name ','trim|required');
		$this->form_validation->set_rules('username','This UserName  is Already Taken ','trim|required|min_length[4]|is_unique[users.username]');
		$this->form_validation->set_rules('email','This Email is Already Taken  ','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password  ','trim|required|min_length[4]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password','Password  ','trim|required|min_length[4]|matches[password]');
		//$this->form_validation->set_rules('order','Select Order ','required');
		
		if($this->form_validation->run() === false){
			//$data['subjects'] = $this->subjects_model->get_list();
			$data['selected_user'] = $this->users_model->get_user_by_id($id);
		$this->template->load('admin','default','users/edit',$data);	
		}else{
		
			$password = $this->input->post('confirm_password');
			$username = $this->input->post('username'); 
			$options = [
                'cost' => 11
                ];
            $hash =  password_hash($password, PASSWORD_BCRYPT, $options);
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $username,
				'email' => $this->input->post('email'),
				'password' => $hash
			);

			// insert data to db 
			$this->users_model->update_user($id,$data);
		//load activity
		$activity_data = array(
            'resource_id' => $this->db->insert_id(),
			'type' => 'Users',
			'action' => 'add',
			'user_id' => 1,
			'message' => 'New User ('. $data['username'] . ') Is Added' 		
		);
		// cal activity model
		$this->activity_model->add_Activity($activity_data);
		 redirect('admin/users');
		}
	}

	    public function delete($id)
	{
        $User_name = $this->users_model->get_user_by_id($id)->username;
		$this->users_model->delete_user($id);
		 $activity_data = array(
            'resource_id' => $this->db->insert_id(),
			'type' => 'Users',
			'action' => 'Delete',
			'user_id' => 1,
			'message' => '('. $User_name . ') has Been Deleted'		
		);
		// cal activity model
		$this->activity_model->add_Activity($activity_data);
		 redirect('admin/users');
	}

	public function login(){
		
	}
}
