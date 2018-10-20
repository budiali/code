<?php 

class Dokter extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> model('dokter_model');

	}

	public function index() {

		$data['dokter'] = $this -> dokter_model -> get_dokter();
		$this -> load -> view('dokter_view',$data);

	}

	function add_new(){

		$this -> load -> view('add_dokter_view');

	}

	function save() {

		$nama_dokter = $this -> input -> post('nama_dokter');
		$spesialis = $this -> input -> post('spesialis');
		$tempat_tugas = $this -> input -> post('tempat_tugas');
		$this -> dokter_model -> save($nama_dokter,$spesialis,$tempat_tugas);
		redirect('dokter');
	}

}

 ?>