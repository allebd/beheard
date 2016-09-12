<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->is_logged_in();
		$this->load->model('profile_model');
	}

	//user page
	public function index()
	{
		$data = $this->profile_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/index';

		$this->load->view('includes/template', $data);
	}


	//Edit user profile page
	public function editprofile()
	{
		$data = $this->profile_model->get_editprofile();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/editprofile';

		$this->load->view('includes/template', $data);
	}

	//Edit user picture page
	public function editpicture()
	{
		$data = $this->profile_model->get_editpicture();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/editpicture';

		$this->load->view('includes/template', $data);
	}

	//Edited user profile page
	public function editedprofile()
	{
		$data = $this->profile_model->get_editedprofile();	
		
		redirect('profile');
	}	

	//Edited user picture page
	public function editedpicture()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload())
		{
			$data = $this->profile_model->get_editpicture();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'profile/editpicture';			
			$data['error'] = $this->upload->display_errors();

			$this->load->view('includes/template',$data);
		}else{
			$data = $this->profile_model->get_editedpicture();		
		
			redirect('profile');
		}
	}	

	//Article page
	public function articles()
	{
		$data = $this->profile_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/article';

		$this->load->view('includes/template', $data);
	}

	//All article add page
	public function addarticle()
	{
		$data = $this->profile_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/addarticle';

		$this->load->view('includes/template', $data);
	}

	//All article added page
	public function addedarticle()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload())
		{
			$data = $this->profile_model->get_post();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'profile/addarticle';
		
			$data['error'] = $this->upload->display_errors();

			$this->load->view('includes/template',$data);
		}else{
			
			$data = $this->profile_model->get_addedarticle();	
			
			redirect('profile/articles');
		}
	}

	//All article view page
	public function viewarticle()
	{
		$data = $this->profile_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/viewarticle';

		$this->load->view('includes/template', $data);
	}

	//All article edit page
	public function editarticle()
	{
		$data = $this->profile_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/editarticle';

		$this->load->view('includes/template', $data);
	}

	//All article edited page
	public function editedarticle()
	{
		$data = $this->profile_model->get_editedarticle();	
		
		redirect('profile/articles');
	}

	//Edit article picture page
	public function editarticlepicture()
	{
		$data = $this->profile_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/editarticlepicture';

		$this->load->view('includes/template', $data);
	}

	//Edited Article picture page
	public function editedarticlepicture()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload())
		{
			$data = $this->profile_model->get_post();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'profile/editarticlepicture';			
			$data['error'] = $this->upload->display_errors();

			$this->load->view('includes/template',$data);
		}else{
			$data = $this->profile_model->get_editedarticlepicture();		
		
			redirect('profile/articles');
		}
	}

	//Change Password page
	public function changepassword()
	{
		$data = $this->profile_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'profile/changepassword';

		$this->load->view('includes/template', $data);
	}

	//Changed Password page
	public function changedpassword()
	{	
		$this->form_validation->set_rules('newpassword', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('newcpassword', 'Password Confirmation', 'trim|required|matches[newpassword]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->profile_model->get_post();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'profile/changepassword';

			$this->load->view('includes/template', $data);
		}else{
			$data = $this->profile_model->get_changedpassword();	
		
			redirect('profile');
		}		
	}

	// Check if user is logged in
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('home/signin');
		}
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */