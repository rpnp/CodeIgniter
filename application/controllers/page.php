<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
	function pagelist($id){
		$this->load->model('test_m');
		$user=$this->test_m->user_select_all();
		//var_dump($user);
		$pagenum=2;
		$pageall=count($user)/$pagenum;
		
		$config['total_rows']=$pageall;
		$config['per_page']=$pagenum;
		$config['num_links']=3;
		$config['base_url']="/CodeIgniter/index.php/page/pagelist";
		$config['user_page_number']=true;
		$this->load->library("pagination");
		$this->pagination->initialize($config);
		echo $this->pagination->create_links();
		
		echo "<br />";
		$id=$id?$id:1;
		$start=($id-1)*$pagenum;
		$list=$this->test_m->user_select_limit($start,$pagenum);
		var_dump($list);	
	}
}
?>