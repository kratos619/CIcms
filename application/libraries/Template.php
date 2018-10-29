<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template 
{
    var $ci;
     function __construct(){
        # code...
        $this->ci =& get_instance();
    }

    /*
        @name: load
        @desc : Loads the template
        @param:loc :location (admin or public)
        @param:tpl_name :name of template
        @param:data Optional Data Array
    */

    function load($loc , $tpl_name,$view,$data = null){
        if($loc == 'admin' && $tpl_name == 'default'){
            $tpl_name == 'admin';
        }
        if($loc == 'public' && $tpl_name == 'default'){
            $tpl_name = 'public';
        }
        $data['main'] = $loc.'/'.$view;
        $this->ci->load->view('/templates/'.$tpl_name,$data);
    }

}
