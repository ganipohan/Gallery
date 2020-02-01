<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function getAll()
	{
		$this->db->get('products')->result_array();
	}
}