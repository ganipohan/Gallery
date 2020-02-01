<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model("user_model");
		$this->load->helper(array('url','download'));	
	}
	public function index()
	{
		$data['title']='Home';
		// $data['products'] = $this->user_model->getAll();
		$data['menu'] = $this->db->get('products')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('user/home',$data);
		$this->load->view('templates/footer');
	}
	public function download($id)
	{
		if(!empty($id)){

			$fileInfo['ambil'] = $this->db->get_where('products',['product_id' => $id])->row_array();
			// var_dump($fileInfo);
			// die();
			
			
			force_download('assets/img/galeri/'.$ambil['image'], NULL);
			// redirect('user');
		}
	}
}