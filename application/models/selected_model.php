<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Selected_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$this->db->where('headline', str_replace('-',' ', $this->uri->segment(3)));
		$getcount = $this->db->get('article');
		foreach($getcount->result() as $countrow)
		{
			$count = $countrow->counter;
			$count = $count + 1;

			$add_the_count = array(
			'counter' => $count	
			);
		$this->db->where('headline', str_replace('-',' ', $this->uri->segment(3)));
		$data['update'] = $this->db->update('article', $add_the_count);
		}
		
		$data['title'] = ucwords(str_replace('-',' ', $this->uri->segment(2))). ' | Beheard';
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('article_id', 'DESC');
		$this->db->limit(5);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');
		$data['breaknews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->where('headline', str_replace('-',' ', $this->uri->segment(3)));
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');	
		$this->db->join('admin', 'admin.adminusername = article.author');	
		$data['theselectnews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->where_not_in('headline', str_replace('-',' ', $this->uri->segment(3)));
		$this->db->where('articletypename', str_replace('-',' ', $this->uri->segment(2)));
		$this->db->order_by('dateposted','DESC');
		$this->db->limit(4);
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');	
		$this->db->join('admin', 'admin.adminusername = article.author');	
		$data['notselectnews'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->order_by('commentdate', 'DESC'); //Just Added this
		$this->db->limit(5); //Just Added this
		$this->db->where('headline', str_replace('-',' ', $this->uri->segment(3)));
		$this->db->join('articletype', 'articletype.articletype_id = article.articletype');	
		$this->db->join('comments', 'comments.commentarticleid = article.article_id');	
		$data['comment'] = $this->db->get();
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

/* End of file selected_model.php */
/* Location: ./application/models/selected_model.php */