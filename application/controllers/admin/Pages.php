<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller 
{
 
    public function index()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
	$data['page_details'] = $this->pages_model->get_pages();
		$this->template->load('admin','default','pages/index',$data);
	}

	    public function add()
	{
        //die('pages');
		//	$this->load->view('welcome_message');
		
		// validations

		$this->form_validation->set_rules('title','Title ','required');
		$this->form_validation->set_rules('subject_id','Select Subject ','required');
		$this->form_validation->set_rules('body','Content ','required');
		$this->form_validation->set_rules('order','Select Order ','required');
		
		if($this->form_validation->run() === false){
			$data['subjects'] = $this->subjects_model->get_list();
		$this->template->load('admin','default','pages/add' , $data);	
		}else{
			        $slug = url_title($this->input->post('title'));
			$data = array(
				'title' => $this->input->post('title'),
				'body' => $this->input->post('body'),
				'subject_id' => $this->input->post('subject_id'),
				'user_id' => 1,
				'slug' => $slug,
				'is_published' => $this->input->post('is_published'),
				'is_fetured' => $this->input->post('is_fetured'),
				'in_menu' => $this->input->post('in_menu')
				
			);

			// insert data to db 
		$this->pages_model->create_page($data);
		//load activity
		$activity_data = array(
            'resource_id' => $this->db->insert_id(),
			'type' => 'Pages',
			'action' => 'add',
			'user_id' => 1,
			'message' => 'Page '. $data['title'] . ' Is Added' 		
		);
		// cal activity model
		$this->activity_model->add_Activity($activity_data);
		 redirect('admin/pages');
		}
	}

	    public function edit()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','pages/edit');
	}

	    public function delete()
	{
        die('pages');
	//	$this->load->view('welcome_message');
		//$this->template->load('admin','default','pages/index');
	}
}
