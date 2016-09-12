<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'iHeard Profile | Beheard';
		$this->db->where('username', $this->session->userdata('username'));
		$data['users'] = $this->db->get('users');
		$this->db->where('author', $this->session->userdata('username'));
		$data['iheard'] = $this->db->get('iheard');
		$this->db->where('article_id', $this->uri->segment(3));
		$data['iheardselect'] = $this->db->get('iheard');
		$data['articletype'] = $this->db->get('articletype');
		
		return $data;
	}

	public function get_editprofile()
	{
		$data['title'] = 'Edit Profile | Beheard';
		$this->db->where('username', $this->session->userdata('username'));
		$data['users'] = $this->db->get('users');
		return $data;
	}

	public function get_editpicture()
	{
		$data['title'] = 'Edit Profile Picture | Beheard';
		$this->db->where('username', $this->session->userdata('username'));
		$data['users'] = $this->db->get('users');
		return $data;
	}


	public function get_editedpicture()
	{	
		$file_data = $this->upload->data();

		$edit_the_picture = array(
			'userphoto' =>  $file_data['file_name']	
			);

		$this->db->where('username', $this->session->userdata('username'));
		$update = $this->db->update('users', $edit_the_picture);
		return $update;
	}

	public function get_editedprofile()
	{	
		$edit_the_profile = array(
			'screenname' => $this->input->post('screenname'),
			'firstname' => $this->input->post('firstname'),	
			'surname' => $this->input->post('surname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),		
			'description' => $this->input->post('description'),	
			);

		$this->db->where('username', $this->session->userdata('username'));
		$update = $this->db->update('users', $edit_the_profile);
		return $update;
	}

	public function get_addedarticle()
	{	

		$file_data = $this->upload->data();

		$add_the_article = array(
			'picture' =>  $file_data['file_name'],
			'articletype' => $this->input->post('articletype'),	
			'typeofnews' => $this->input->post('typeofnews'),
			'headline' => $this->input->post('headline'),
			'author' => $this->input->post('author'),
			'leadstory' => $this->input->post('leadstory'),
			'body' => $this->input->post('body'),	
			'picturesource' => $this->input->post('picturesource'),
			'dateposted' => date('Y-m-d')
			);

		$insert = $this->db->insert('iheard', $add_the_article);
		return $insert;
	}

	public function get_editedarticle()
	{	
		$edit_the_article = array(
			'typeofnews' => $this->input->post('typeofnews'),
			'headline' => $this->input->post('headline'),
			'author' => $this->input->post('author'),
			'leadstory' => $this->input->post('leadstory'),
			'body' => $this->input->post('body'),
			'articletype' => $this->input->post('articletype')
			);

		$this->db->where('article_id', $this->input->post('article_id'));
		$update = $this->db->update('iheard', $edit_the_article);
		return $update;
	}

	public function get_editedarticlepicture()
	{	
		$file_data = $this->upload->data();

		$edit_the_picture = array(
			'picture' =>  $file_data['file_name'],
			'picturesource' => $this->input->post('picturesource')	
			);

		$this->db->where('article_id', $this->input->post('article_id'));
		$update = $this->db->update('iheard', $edit_the_picture);
		return $update;
	}

	public function get_changedpassword()
	{	
		$chng_the_userpass = array(
			'password' => md5($this->input->post('newpassword'))
			);

		$this->db->where('username', $this->session->userdata('username'));
		$update = $this->db->update('users', $chng_the_userpass);
		return $update;
	}
} 

/* End of file profile_model.php */
/* Location: ./application/models/profile_model.php */