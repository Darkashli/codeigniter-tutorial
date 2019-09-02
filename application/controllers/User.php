<?php

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("form"); //can been autoloaded within (config->autoload->helper())
    }

    public function form_helper_study()
    {
       $this->load->view('user/form');
    }
}