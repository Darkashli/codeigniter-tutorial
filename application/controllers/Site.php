<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model("site_model");
	}


	public function index()
	{
		$message = $this->site_model->run_my_query();

		$info_array = array(
			'name' => 'me',
			'email' => 'alaa_darkashli@hotmail.com',
			'job' => 'Student',
			'message' => $message
		);

		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer', $info_array);

	}

	public function about($id="", $name="")
	{
		echo "this is a ID " . $id . " BY " .$name;
	}

	public function pass_var()
	{
		$info_array = array(
			'name' => 'Alaa Darkashli',
			'email' => 'alaa_darkashli@hotmail.com',
			'job' => 'Web Developer'
		);

		$this->load->view('pass_var', $info_array);
	}

	public function insert_data_into_table()
	{
		$data = array(
			'name' => 'jacky2',
			'mail' => 'jacky2@hotmail.com',
			'phone' => '333332',
			//'first_name' => 'Johny'
		);

		if($this->site_model->insert_table_data($data)) {
			echo "Data has been inserted";
		}
	}
}
