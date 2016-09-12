<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Beheard - You Can Talk.';
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('article_id', 'DESC');
		$this->db->limit(5);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');
		$data['breaknews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('article_id', 'DESC');
		$this->db->limit(1);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');
		$data['slidernewsone'] = $this->db->get();
		$this->db->order_by('article_id', 'DESC');
		$thesliderone = $this->db->get('article',1);
		foreach($thesliderone->result() as $slidrow)
		{
			$slident = $slidrow->article_id;
		}
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->where_not_in('article_id',$slident);
		$this->db->order_by('article_id', 'DESC');
		$this->db->limit(5);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');
		$data['slidernews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('dateposted', 'DESC');
		$this->db->limit(5);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');		
		$data['headnews'] = $this->db->get();
		$data['arttypenews'] = $this->db->get('articletype');
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('counter', 'DESC');
		$this->db->limit(4);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');	
		$data['popularnews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('dateposted', 'DESC');
		$this->db->limit(4);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');	
		$data['recentnews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('comments');
		$this->db->order_by('commentdate', 'DESC');
		$this->db->limit(4);
		$this->db->join('article', 'article.article_id = comments.commentarticleid');	
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');	
		$data['commentnews'] = $this->db->get();
		$data['gennews'] = $this->db->get('articletype');
         
		return $data;
	}

	public function get_register()
	{
		$data['title'] = 'Register | Beheard';
		return $data;
	}

	public function get_signin()
	{
		$data['title'] = 'Signin | Beheard';
		return $data;
	}

	public function get_newuser()
	{	
		$add_the_user = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'screenname' => $this->input->post('screenname'),
			'firstname' => $this->input->post('firstname'),	
			'surname' => $this->input->post('surname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone')	
			);

		$insert = $this->db->insert('users', $add_the_user);
		return $insert;
	}

	public function get_newcomment()
	{	
		if(preg_match("/http/i", $this->input->post('commentauthor')))
		{
			$insert['spamError'] = "No Website URLs permitted";
			return $insert;
		}else
		if(preg_match("/http/i", $this->input->post('commentbody')))
		{
			$insert['spamError'] = "No Website URLs permitted";
			return $insert;
		}else
		{
			$this->db->where('headline',$this->input->post('article_id'));
			$getdcomment = $this->db->get('article');
			foreach($getdcomment->result() as $comrow)
			{
				$dcomment = $comrow->article_id;
			}

			$add_the_comment = array(
				'commentarticleid' => $dcomment,
				'commentauthor' => $this->input->post('commentauthor'),
				'commentbody' => $this->input->post('commentbody'),
				'commentdate' => date('Y-m-d'),
				'commenttime' => date('H:i A')
				);

			$insert['completed'] = $this->db->insert('comments', $add_the_comment);
			return $insert;
		}
	}
} 

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */