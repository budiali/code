<?php 

class Hallo extends CI_Controller {

	public function index()
	{

		$this -> load -> view('hallo_world');

	}

public function coba()
	{

		$this -> load -> view('hallo_world1');

	}
public function coba1()
	{

		$this -> load -> view('hallo_world2');

	}


}



 ?>