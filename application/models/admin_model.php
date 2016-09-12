<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Admin | Beheard';
		$this->db->where('adminusername', $this->session->userdata('adminusername'));
		$data['admin'] = $this->db->get('admin');
		$this->db->where_not_in('adminusername', 'super admin');
		$data['alladmins'] = $this->db->get('admin');
		$this->db->where('admin_id', $this->uri->segment(3));
		$data['adminselect'] = $this->db->get('admin');
		$data['articletype'] = $this->db->get('articletype');
		$articlet = str_replace('-',' ', $this->uri->segment(3));
		$this->db->select('*');		
		$this->db->from('articletype');
		$this->db->where('articletypename',$articlet);
		$this->db->join('article', 'article.articletype = articletype.articletype_id');
		$data['article']= $this->db->get();	
		$this->db->where('articletype_id', $this->uri->segment(3));
		$data['articletypeselect'] = $this->db->get('articletype');;
		$this->db->where('article_id', $this->uri->segment(3));
		$data['articleselect'] = $this->db->get('article');
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->where('article_id', $this->uri->segment(3));
		$this->db->join('comments', 'comments.commentarticleid = article.article_id');
		$data['commentsquery']= $this->db->get();
		$this->db->where('name', 'facebook');
		$data['fbsocial'] = $this->db->get('social');
		$this->db->where('name', 'twitter');
		$data['twsocial'] = $this->db->get('social');
		$this->db->where('name', 'google plus');
		$data['gpsocial'] = $this->db->get('social');
		$this->db->where('social_id', $this->uri->segment(3));
		$data['fbsocialedit'] = $this->db->get('social');
		$this->db->where('social_id', $this->uri->segment(3));
		$data['twsocialedit'] = $this->db->get('social');
		$this->db->where('social_id', $this->uri->segment(3));
		$data['gpsocialedit'] = $this->db->get('social');
		return $data;
	}

	public function get_editprofile()
	{
		$data['title'] = 'Edit Admin | Beheard';
		$this->db->where('adminusername', $this->session->userdata('adminusername'));
		$data['admin'] = $this->db->get('admin');
		return $data;
	}

	public function get_editpicture()
	{
		$data['title'] = 'Edit Admin Picture | Beheard';
		$this->db->where('adminusername', $this->session->userdata('adminusername'));
		$data['admin'] = $this->db->get('admin');
		return $data;
	}


	public function get_editedpicture()
	{	
		$file_data = $this->upload->data();

		$edit_the_picture = array(
			'adminphoto' =>  $file_data['file_name']	
			);

		$this->db->where('adminusername', $this->session->userdata('adminusername'));
		$update = $this->db->update('admin', $edit_the_picture);
		return $update;
	}

	public function get_editedprofile()
	{	
		$edit_the_profile = array(
			'screenname' => $this->input->post('screenname'),
			'adminfirstname' => $this->input->post('adminfirstname'),	
			'adminsurname' => $this->input->post('adminsurname'),
			'adminemail' => $this->input->post('adminemail'),
			'adminnumber' => $this->input->post('adminnumber'),		
			'admindescription' => $this->input->post('admindescription'),	
			);

		$this->db->where('adminusername', $this->session->userdata('adminusername'));
		$update = $this->db->update('admin', $edit_the_profile);
		return $update;
	}

	public function get_addedadmin()
	{	
		$add_the_admin = array(
			'adminusername' => $this->input->post('adminusername'),
			'adminpassword' => md5($this->input->post('adminpassword')),
			'screenname' => $this->input->post('screenname'),
			'adminfirstname' => $this->input->post('adminfirstname'),	
			'adminsurname' => $this->input->post('adminsurname'),
			'adminemail' => $this->input->post('adminemail'),
			'adminnumber' => $this->input->post('adminnumber'),		
			'admindescription' => $this->input->post('admindescription'),	
			);

		$insert = $this->db->insert('admin', $add_the_admin);
		return $insert;
	}

	public function get_editedadmin()
	{	
		$edit_the_admin = array(
			'screenname' => $this->input->post('screenname'),
			'adminfirstname' => $this->input->post('adminfirstname'),	
			'adminsurname' => $this->input->post('adminsurname'),
			'adminemail' => $this->input->post('adminemail'),
			'adminnumber' => $this->input->post('adminnumber'),		
			'admindescription' => $this->input->post('admindescription'),	
			);

		$this->db->where('admin_id', $this->input->post('admin_id'));
		$update = $this->db->update('admin', $edit_the_admin);
		return $update;
	}

	public function get_deleteadmin()
	{	
		$this->db->where('admin_id', $this->uri->segment(3));
		$delete = $this->db->delete('admin');
		return $delete;
	}

	public function get_addedarticletype()
	{	
		$add_the_articletype = array(
			'articletypename' => $this->input->post('articletypename'),	
			);

		$insert = $this->db->insert('articletype', $add_the_articletype);
		return $insert;
	}

	public function get_editedarticletype()
	{	
		$edit_the_articletype = array(
			'articletypename' => $this->input->post('articletypename')	
			);

		$this->db->where('articletype_id', $this->input->post('articletype_id'));
		$update = $this->db->update('articletype', $edit_the_articletype);
		return $update;
	}

	public function get_deletearticletype()
	{	
		$this->db->where('articletype_id', $this->uri->segment(3));
		$delete = $this->db->delete('articletype');
		return $delete;
	}

	public function get_addedarticle()
	{	

		$file_data = $this->upload->data();
		$thearttype = $this->input->post('articletype');
		$this->db->where('articletypename',$thearttype);
		$gettheart = $this->db->get('articletype');
		foreach($gettheart->result() as $gettheartrow)
		{
			$getarttype = $gettheartrow->articletype_id;
		}

		$add_the_article = array(
			'picture' =>  $file_data['file_name'],
			// 'articletype' => $this->input->post('articletype'),
			'articletype' => $getarttype,	
			'typeofnews' => $this->input->post('typeofnews'),
			'headline' => $this->input->post('headline'),
			'author' => $this->input->post('author'),
			'leadstory' => $this->input->post('leadstory'),
			'body' => $this->input->post('body'),	
			'picturesource' => $this->input->post('picturesource'),
			'dateposted' => date('Y-m-d')
			);

		$insert = $this->db->insert('article', $add_the_article);
		return $insert;
	}

	public function get_editedarticle()
	{	
		$edit_the_article = array(
			'typeofnews' => $this->input->post('typeofnews'),
			'headline' => $this->input->post('headline'),
			'author' => $this->input->post('author'),
			'leadstory' => $this->input->post('leadstory'),
			'body' => $this->input->post('body')
			);

		$this->db->where('article_id', $this->input->post('article_id'));
		$update = $this->db->update('article', $edit_the_article);
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
		$update = $this->db->update('article', $edit_the_picture);
		return $update;
	}


	public function get_deletearticle()
	{	
		$this->db->where('article_id', $this->uri->segment(3));
		$delete = $this->db->delete('article');
		return $delete;
	}

	public function get_deletecomment()
	{	
		$this->db->where('comment_id', $this->uri->segment(3));
		$delete = $this->db->delete('comments');
		return $delete;
	}

	public function get_editedsocial()
	{	
		$edit_the_social = array(
			'link' => $this->input->post('link')	
			);

		$this->db->where('social_id', $this->input->post('social_id'));
		$update = $this->db->update('social', $edit_the_social);
		return $update;
	}

	public function get_changedpassword()
	{	
		$chng_the_adminpass = array(
			'adminpassword' => md5($this->input->post('newpassword'))
			);

		$this->db->where('adminusername', $this->session->userdata('adminusername'));
		$update = $this->db->update('admin', $chng_the_adminpass);
		return $update;
	}
} 

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */