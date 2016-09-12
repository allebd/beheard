<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Error | Beheard';
		return $data;
	}
} 

/* End of file error_model.php */
/* Location: ./application/models/error_model.php */