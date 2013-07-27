<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tf_news_c extends CI_Controller {
	function newsList(){
		$data['news']=$this->selectAll();
		$this->load->view('tf_news_list.php',$data);	
	}
	function insertView(){
		$this->load->view('tf_news_insertView.php');	
	}
	function updateView(){
		$data['new']=$this->selectById($_GET['id']);
		$this->load->view('tf_news_updateView.php',$data);
	}
	function insert(){
		$this->load->model('tf_news_m');	
		$arr=array('title'=>$_POST['title'],'content'=>$_POST['content']);
		$this->tf_news_m->news_insert($arr);
		$this->newsList();//load newsList
	}
	function update(){
		$this->load->model('tf_news_m');
		$arr=array('title'=>$_POST['title'],'content'=>$_POST['content']);
		$this->tf_news_m->news_update($_POST['id'],$arr);
		$this->newsList();//load newsList
	}
	function del(){
		$this->load->model('tf_news_m');
		$this->tf_news_m->news_del($_GET['id']);
		$this->newsList();//load newsList	
	}
	function selectById($id){
		$this->load->model('tf_news_m');
		$new=$this->tf_news_m->news_select($id);
		return $new;
	}
	function selectAll(){
		$this->load->model('tf_news_m');
		$news=$this->tf_news_m->news_select_all();
		return $news;
	}
}
?>
