<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {
	function sayhello($name){
		echo $name.",hello world!";
	}
	function show(){
		
		$name="jiangshen";
		@$count=file_get_contents('./num.txt');
		$count=$count?$count:0;
		
		$count++;
		
		//$arr=array('a'=>$a,'b'=>$b);
		$data=array('v_name'=>$name,'v_count'=>$count);
		
		$re=fopen('./num.txt','w');
		fwrite($re,$count);
		fclose($re);
		
		$this->load->view('test_view.php',$data);
		$this->load->view('test_view_foot.php');
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>