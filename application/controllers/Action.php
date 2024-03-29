<?php

class Action extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("action_model");
	}

	public function get_all_data()
	{
		$data = $this->action_model->select_all_data();
		echo "<pre>";
		print_r($data);
	}

	public function update_data()
	{
		if ($this->action_model->update_table_data()) {
			echo "<h3>Data has been updated</h3>";
		}
	}

	public function get_users()
	{
		$data = $this->action_model->get_all_users_data();
		echo "<pre>";
		print_r($data);
	}

	public function delete_single_user()
	{
		if($this->action_model->delete_specific_user()) {
			echo "Data has been deleted";
		}
	}

	public function condition()
	{
		$data = $this->action_model->get_where_condition_query();
		echo "<pre>";
		print_r ($data);
	}

	public function multiCondition()
	{
		// $data = $this->action_model->get_or_where_condition_query();
		$data = $this->action_model->get_where_in_condition_query();
		echo "<pre>";
		print_r ($data);
	}

	public function get_messages()
	{
		$data = $this->action_model->get_user_messages();
		echo "<pre>";
		print_r ($data);
	}
}