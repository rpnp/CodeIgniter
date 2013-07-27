<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function insert(){
		$this->load->model('test_m');	
		$arr=array('uname'=>'qqq','upass'=>'1234');
		$this->test_m->user_insert($arr);
	}
	function update(){
		$this->load->model('test_m');
		$arr=array('uname'=>'qqq','upass'=>'1234567');
		$this->test_m->user_update(43,$arr);
	}
	function del(){
		$this->load->model('test_m');
		$this->test_m->user_del(43);		
	}
	function select(){
		$this->load->model('test_m');
		$user=$this->test_m->user_select('u10');	
		//var_dump($user);
		echo "id:".$user[0]->uid."<br />";
		echo "uname:".$user[0]->uname."<br />";
		echo "upass:".$user[0]->upass."<br />";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>