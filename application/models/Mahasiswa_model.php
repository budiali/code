<?php 

class Mahasiswa_model extends CI_Model {

	public function get_mahasiswa()
	{
		$result = $this -> db -> get('mahasiswa');

		return $result;
	}

	function save( $nama , $jurusan ) {

		$data = array(

			'nama' => $nama ,
			'jurusan' => $jurusan
		);

		$this -> db -> insert('mahasiswa',$data);
	}

}


 ?>