<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Site_model extends CI_Model
{

	private $my_interconnect;

	//Instead of using database library (config->autoload->libraries->database)
	public function __construct()
	{
		parent::__construct();
		$this->my_interconnect = $this->load->database("my_interconnect", true);
	}

    public function run_my_query()
    {
        return "This is message from model file";
    }

    public function insert_table_data($data)
    {
    	//This is Regular record query of Row query
    	//return $this->db->query("Insert into users (name, mail, phone) Values ('Khara1', 'khara1@gmail.com', '07775000')");
    	//This is Active record query
    	return $this->db->insert("users", $data); //from Default DB connection 
    	return $this->my_interconnect->insert("info", $data); //from my_interconnect DB connection

    }
}
