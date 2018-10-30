<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{
    public function index()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','users/index');
	}

	    public function add()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','users/add');
	}

	    public function edit()
	{
        //die('pages');
	//	$this->load->view('welcome_message');
		$this->template->load('admin','default','users/edit');
	}

	    public function delete()
	{
        die('user');
	//	$this->load->view('welcome_message');
		//$this->template->load('admin','default','pages/index');
	}

	public function login(){
		
	}
}
