<?php

class Action_model extends CI_model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//it will select all data from table
	public function select_all_data()
	{
		//$this->db->select("*");
		//$query = $this->db->get("users"); //tbl_users
		//select * from tbl_users

		// $this->db->select("name, mail");
		// $this->db->from("users"); //tbl_users

		// $query = $this->db->get();
		//
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where("id", 1);

		$query = $this->db->get();

		return $result = $query->result();
	}

	public function update_table_data()
	{
		$data = array(
			"name" => "Mhd Alaa",
			"mail" => "fake@yahoo.com",
			"phone" => "0685862225"
		);

		$this->db->where("id", 2);
		$this->db->update("users", $data);

		return true;
	}

	public function get_all_users_data()
	{
		$this->db->select("*");
		$this->db->from("users");
		$query = $this->db->get();

		return $result = $query->result();
	}

	public function delete_specific_user()
	{
		//$this->db->where("id", 11);
		//return $this->db->delete("users");
		$this->db->delete("users", array(
			"id" => 2
		));
	}

	public function get_where_condition_query()
	{
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where("name =", "jacky");
		$query = $this->db->get();
		return $result = $query->result();
	}

	//or_where, where_in, or_where_in, where_not_in, or_where_not_in conditions

	public function get_or_where_condition_query(){
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where("name =", "jacky");
		//0r_where condition (one or two or both of columns are true)
		$this->db->or_where("mail =", "khara1@gmail.com1");
		$query = $this->db->get();
		return $result = $query->result();
	}

	public function get_where_in_condition_query(){
		$this->db->select("*");
		$this->db->from("users");
		//where_in condition (one or more values of one column are true )
		$this->db->where_in("name", array(
			"jacky", "khara"
		));

		$query = $this->db->get();
		return $result = $query->result();
	}

	public function get_user_messages()
	{
		//join tbl_users => id, match user_id inside tbl_messages
		//If you need a specific type of JOIN you can specify it via the third parameter of the function. Options are: left, right, outer, inner, left outer, and right outer. https://www.codeigniter.com/userguide3/database/query_builder.html


		// $this->db->select("user.*, message.message");
		// $this->db->from("tbl_users as user");
		// $this->db->join("tbl_messages as message", "user.id = message.user_id", "left");
		// $query = $this->db->get();
		// return $result = $query->result_array();

		$this->db->select("*");
		$this->db->from("users as user");
		$this->db->join("messages as message", "user.id = message.user_id", "inner");
		$query = $this->db->get();
		return $result = $query->result_array();
	}
}
