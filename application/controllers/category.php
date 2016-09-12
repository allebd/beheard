<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('category_model');
	}

	public function index()
	{
		$data = $this->category_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['landing'] = 'landing';
		$data['page_title'] = '';

		$data['main_content'] = 'article/index';

		$this->load->view('includes/template', $data);
	}
}

/* End of file category.php */
/* Location: ./application/controllers/category.php */