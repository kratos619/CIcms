<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller 
{
 
    public function index()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','pages/index');
	}

	    public function add()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','pages/add');
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
