<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller 
{
 
    public function index()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
			$data['subjects'] = $this->subjects_model->get_list();
		$this->template->load('admin','default','subjects/index',$data);
	}

	    public function add()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
	//$this->template->load('admin','default','subjects/add');

	$this->form_validation->set_rules('name','Subject Name','required');

	if($this->form_validation->run() === false){
		$this->template->load('admin','default','subjects/add');	
	}else{
		$data = array(
            'name' => $this->input->post('name')
        );

		// insert data to db 
		$this->subjects_model->create_subject();
	 
		//load activity

		$activity_data = array(
            'resource_id' => $this->db->insert_id(),
			'type' => 'subject',
			'action' => 'added',
			'message' => 'subject '. $data['name'] 		
		);
		// cal activity model
		$this->activity_model->add_Activity($activity_data);
		 redirect('admin/subjects');
	}
	}

	    public function edit()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','subjects/edit');
	}

	    public function delete()
	{
        die('subjects');
	//	$this->load->view('welcome_message');
		//$this->template->load('admin','default','pages/index');
	}
}
