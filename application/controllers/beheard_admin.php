<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beheard_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('validate_model');
		$this->load->model('beheard_admin_model');
	}


	//Admin Login page
	public function index()
	{
		$data = $this->beheard_admin_model->get_post();
		$data['page_title'] = 'signin';

		$data['main_content'] = 'beheard_admin/signin';

		$this->load->view('includes/template', $data);
	}

	//Admin Login Incorrect
	public function signin()
	{
		$data = $this->beheard_admin_model->get_post();
		$data['page_title'] = 'signin';
		$data['incorrectlogin'] = 'Incorrect Username or Password';

		$data['main_content'] = 'beheard_admin/signin';

		$this->load->view('includes/template', $data);
	}

	//Admin Validate Login
	public function validate_credentials()
	{
		$query = $this->validate_model->a_validate();

		if($query) // if admin's credentials validated...
		{
				
			$data = array(
					'adminusername' => $this->input->post('adminusername'),
					'is_adminlogged_in' => true
				);
		
			$this->session->set_userdata($data);
			redirect('admin');
		}
		else
		{
			$this->signin();
		}
		
	}

	//Admin Logout
	public function logout()
	{
		$this->session->sess_destroy();
		$data = $this->beheard_admin_model->get_post();
		$data['page_title'] = 'signin';
		$data['loggedout'] = 'You are now signed out';

		$data['main_content'] = 'beheard_admin/signin';

		$this->load->view('includes/template', $data);				
	}
}

/* End of file beheard_admin.php */
/* Location: ./application/controllers/beheard_admin.php */