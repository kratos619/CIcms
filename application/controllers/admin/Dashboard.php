<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        //die('Dashboard');
        //load template
        
        $data['activities'] = $this->activity_model->get_list();
        //data['actiivities_by_date'] = $this->activity_model->get_activity_by_date()
        $this->template->load('admin', 'default', 'dashboard', $data);
    }
}
