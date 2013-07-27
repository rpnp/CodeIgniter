<?php
class Tf_news_m extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function news_insert($arr){
		$this->db->insert('news',$arr);
	}
	function news_update($id,$arr){
		$this->db->where('id',$id);
		$this->db->update('news',$arr);
	}
	function news_del($id){
		$this->db->where('id',$id);
		$this->db->delete('news');
	}
	function news_select($id){
		$this->db->where('id',$id);
		$this->db->select('*');
		$query=$this->db->get('news');
		return $query->result();
	}
	
	function news_select_all()
	{
		$this->db->select('*');
		$query=$this->db->get('news');
		return $query->result();
	}
}
?>