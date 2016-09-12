<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iheard_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'iHeard | Beheard';
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('article_id', 'DESC');
		$this->db->limit(5);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');
		$data['breaknews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('iheard');
		$this->db->where('typeofnews', 'National');
		$this->db->order_by('dateposted', 'DESC');
		$data['theselectnews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('iheard');
		$this->db->where('typeofnews', 'International');
		$this->db->order_by('dateposted', 'DESC');	
		$data['theselectednews'] = $this->db->get();
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

	public function get_commentpost()
	{
		$data['title'] = 'iHeard | Beheard';
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('article_id', 'DESC');
		$this->db->limit(5);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');
		$data['breaknews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('iheard');
		$this->db->where('article_id', str_replace('-',' ', $this->uri->segment(5)));	
		$data['theselectnews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('iheard');
		$this->db->where_not_in('article_id', str_replace('-',' ', $this->uri->segment(5)));
		$this->db->order_by('dateposted','DESC');
		$this->db->limit(4);
		$data['notselectnews'] = $this->db->get();
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
} 

/* End of file iheard_model.php */
/* Location: ./application/models/iheard_model.php */