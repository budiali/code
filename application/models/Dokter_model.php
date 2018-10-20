<?php 

class Dokter_model extends CI_Model {

	public function get_dokter(){

		$result = $this -> db -> get('dokter');

		return $result;

	}

	 function save($nama_dokter,$spesialis,$tempat_tugas) {

	 	$data = array (

	 		'nama_dokter' => $nama_dokter,
	 		'spesialis' => $spesialis,
	 		'tempat_tugas' => $tempat_tugas
	 	);

	 	$this -> db -> insert('dokter',$data);

	}
}

 ?>