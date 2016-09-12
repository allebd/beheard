<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('error_model');
	}

	public function index()
	{
		$data = $this->error_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['page_title'] = 'signin';
		
		$data['main_content'] = 'error/404';

		$this->load->view('includes/template', $data);
	}
}

/* End of file error.php */
/* Location: ./application/controllers/error.php */