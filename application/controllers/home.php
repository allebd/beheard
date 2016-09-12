<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('home_model');
		$this->load->model('validate_model');
	}

	public function index()
	{
		$data = $this->home_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['page_title'] = '';

		$data['main_content'] = 'home/home';

		$this->load->view('includes/template', $data);
	}

	public function register()
	{
		$data = $this->home_model->get_register();
		$data['page_title'] = 'register';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		
		$data['main_content'] = 'home/register';

		$this->load->view('includes/template', $data);
	}

	public function signin()
	{
		$data = $this->home_model->get_signin();
		$data['page_title'] = 'signin';

		$data['main_content'] = 'home/signin';

		$this->load->view('includes/template', $data);
	}


	//correct register
	public function regsuccessful()
	{
		$data = $this->home_model->get_signin();
		$data['page_title'] = 'signin';

		$data['correctreg'] = 'Registration Successful';

		$data['main_content'] = 'home/signin';

		$this->load->view('includes/template', $data);
	}

	//Incorrect
	public function incorrectsignin()
	{
		$data = $this->home_model->get_signin();
		$data['page_title'] = 'signin';

		$data['incorrectlogin'] = 'Incorrect Username or Password';

		$data['main_content'] = 'home/signin';

		$this->load->view('includes/template', $data);
	}

	public function newuser()
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->home_model->get_register();
			$data['page_title'] = 'register';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			
			$data['main_content'] = 'home/register';

			$this->load->view('includes/template', $data);
		}else{
			$data = $this->home_model->get_newuser();		
		
			redirect('home/regsuccessful');
		}				
	}

	public function verifyuser()
	{
		$query = $this->validate_model->validate();

		if($query) // if user's credentials validated...
		{
				
			$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => true
				);
		
			$this->session->set_userdata($data);
			redirect('profile');
		}
		else
		{
			$this->incorrectsignin();
		}
		
	}

	// Logout
	public function logout()
	{
		$this->session->sess_destroy();
		$data = $this->home_model->get_post();
		$data['page_title'] = 'signin';
		$data['loggedout'] = 'You are now signed out';

		$data['main_content'] = 'home/signin';

		$this->load->view('includes/template', $data);				
	}

	// Comment
	public function comment()
	{
		$data = $this->home_model->get_newcomment();		
		
		redirect('selected/'.str_replace(' ','+', $this->uri->segment(3)).'/'.str_replace(' ','+', $this->uri->segment(4)));				
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */