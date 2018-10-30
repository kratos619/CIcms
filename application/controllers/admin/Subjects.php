<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller 
{
 
    public function index()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','subjects/index');
	}

	    public function add()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','subjects/add');
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
