<?php 

class Blog extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}

	function index()
	{
		$data['title'] = "This Is Title";
		$data['content'] = "This Is Content, Welcome To My Blog!";
		$data['footer'] = "This Is Footer";
		$this -> load -> view('blog_view',$data);
	}



}




 ?>