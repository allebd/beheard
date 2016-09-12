<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beheard_admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Admin | Beheard';
		return $data;
	}
} 

/* End of file beheard_admin_model.php */
/* Location: ./application/models/beheard_admin_model.php */