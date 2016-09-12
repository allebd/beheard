<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->is_adminlogged_in();
		$this->load->model('admin_model');
	}

	//Admin page
	public function index()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/index';

		$this->load->view('includes/template', $data);
	}

	//Edit admin profile page
	public function editprofile()
	{
		$data = $this->admin_model->get_editprofile();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/editprofile';

		$this->load->view('includes/template', $data);
	}

	//Edit admin picture page
	public function editpicture()
	{
		$data = $this->admin_model->get_editpicture();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/editpicture';

		$this->load->view('includes/template', $data);
	}

	//Edited Admin profile page
	public function editedprofile()
	{
		$data = $this->admin_model->get_editedprofile();	
		
		redirect('admin');
	}	

	//Edited Admin picture page
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
			$data = $this->admin_model->get_editpicture();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'admin/editpicture';			
			$data['error'] = $this->upload->display_errors();

			$this->load->view('includes/template',$data);
		}else{
			$data = $this->admin_model->get_editedpicture();		
		
			redirect('admin');
		}
	}

	//All admin page
	public function admins()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/admins';

		$this->load->view('includes/template', $data);
	}

	//All admin add page
	public function addadmin()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/addadmin';

		$this->load->view('includes/template', $data);
	}

	//All admin added page
	public function addedadmin()
	{	
		$this->form_validation->set_rules('adminpassword', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('admincpassword', 'Password Confirmation', 'trim|required|matches[adminpassword]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->admin_model->get_post();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'admin/addadmin';

			$this->load->view('includes/template', $data);
		}else{
			$data = $this->admin_model->get_addedadmin();	
		
			redirect('admin/admins');
		}		
	}

	//All admin edit page
	public function editadmin()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/editadmin';

		$this->load->view('includes/template', $data);
	}

	//All admin edited page
	public function editedadmin()
	{
		$data = $this->admin_model->get_editedadmin();	
		
		redirect('admin/admins');
	}

	//All admin delete page
	public function deleteadmin()
	{
		$data = $this->admin_model->get_deleteadmin();	
		
		redirect('admin/admins');
	}

	//Articles page
	public function articles()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/articletype';

		$this->load->view('includes/template', $data);
	}

	//All article type add page
	public function addarticletype()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/addarticletype';

		$this->load->view('includes/template', $data);
	}

	//All article type added page
	public function addedarticletype()
	{	
		$data = $this->admin_model->get_addedarticletype();	
		
		redirect('admin/articles');
	}

	//All article type edit page
	public function editarticletype()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/editarticletype';

		$this->load->view('includes/template', $data);
	}

	//All article type edited page
	public function editedarticletype()
	{
		$data = $this->admin_model->get_editedarticletype();	
		
		redirect('admin/articles');
	}

	//All article type delete page
	public function deletearticletype()
	{
		$data = $this->admin_model->get_deletearticletype();	
		
		redirect('admin/articles');
	}

	//Article page
	public function article()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/article';

		$this->load->view('includes/template', $data);
	}

	//All article add page
	public function addarticle()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/addarticle';

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
			$data = $this->admin_model->get_post();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'admin/addarticle';
		
			$data['error'] = $this->upload->display_errors();

			$this->load->view('includes/template',$data);
		}else{
			
			$data = $this->admin_model->get_addedarticle();	
			
			redirect('admin/article/'.$this->uri->segment(3));
		}
	}

	//All article view page
	public function viewarticle()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/viewarticle';

		$this->load->view('includes/template', $data);
	}

	//All article comments page
	public function comments()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/comments';

		$this->load->view('includes/template', $data);
	}

	//All article edit page
	public function editarticle()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/editarticle';

		$this->load->view('includes/template', $data);
	}

	//All article edited page
	public function editedarticle()
	{
		$data = $this->admin_model->get_editedarticle();	
		
		redirect('admin/article/'.$this->uri->segment(3));
	}

	//Edit article picture page
	public function editarticlepicture()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/editarticlepicture';

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
			$data = $this->admin_model->get_post();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'admin/editarticlepicture';			
			$data['error'] = $this->upload->display_errors();

			$this->load->view('includes/template',$data);
		}else{
			$data = $this->admin_model->get_editedarticlepicture();		
		
			redirect('admin/article/'.$this->uri->segment(3));
		}
	}

	//All comment delete page
	public function deletecomment()
	{
		$data = $this->admin_model->get_deletecomment();	
		
		redirect('admin/comments/'.$this->uri->segment(4).'/'.$this->uri->segment(5));
	}

	//All article type delete page
	public function deletearticle()
	{
		$data = $this->admin_model->get_deletearticle();	
		
		redirect('admin/article/'.$this->uri->segment(4));
	}

	//Social page
	public function social()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/social';

		$this->load->view('includes/template', $data);
	}

	//Facebook edit page
	public function editfacebook()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/editfacebook';

		$this->load->view('includes/template', $data);
	}

	//Facebook edited page
	public function editedfacebook()
	{
		$data = $this->admin_model->get_editedsocial();	
		
		redirect('admin/social');
	}

	//Twitter edit page
	public function edittwitter()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/edittwitter';

		$this->load->view('includes/template', $data);
	}

	//Twitter edited page
	public function editedtwitter()
	{
		$data = $this->admin_model->get_editedsocial();	
		
		redirect('admin/social');
	}

	//Google plus edit page
	public function editgoogleplus()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/editgoogleplus';

		$this->load->view('includes/template', $data);
	}

	//Google plus edited page
	public function editedgoogleplus()
	{
		$data = $this->admin_model->get_editedsocial();	
		
		redirect('admin/social');
	}

	//Change Password page
	public function changepassword()
	{
		$data = $this->admin_model->get_post();
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['adminlanding'] = 'adminlanding';
		$data['main_content'] = 'admin/changepassword';

		$this->load->view('includes/template', $data);
	}

	//Changed Password page
	public function changedpassword()
	{	
		$this->form_validation->set_rules('newpassword', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('newcpassword', 'Password Confirmation', 'trim|required|matches[newpassword]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->admin_model->get_post();
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['adminlanding'] = 'adminlanding';
			$data['main_content'] = 'admin/changepassword';

			$this->load->view('includes/template', $data);
		}else{
			$data = $this->admin_model->get_changedpassword();	
		
			redirect('admin');
		}		
	}

	// Check if Admin is logged in
	public function is_adminlogged_in()
	{
		$is_adminlogged_in = $this->session->userdata('is_adminlogged_in');

		if(!isset($is_adminlogged_in) || $is_adminlogged_in != true)
		{
			redirect('beheard_admin/index');
		}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */