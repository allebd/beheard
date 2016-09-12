<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iheard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('iheard_model');
	}

	public function index()
	{
		$data = $this->iheard_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['landing'] = 'landing';
		$data['page_title'] = '';

		$data['main_content'] = 'iheard/index';

		$this->load->view('includes/template', $data);
	}

	public function selected()
	{
		$data = $this->iheard_model->get_commentpost();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['landing'] = 'landing';
		$data['page_title'] = '';

		$data['main_content'] = 'iheard/selected';

		$this->load->view('includes/template', $data);
	}
}

/* End of file iheard.php */
/* Location: ./application/controllers/iheard.php */