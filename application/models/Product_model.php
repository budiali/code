<?php 

class Product_model extends CI_Model {

	public function get_product()
	{
		$result = $this -> db -> get('product');

		return $result;
	}


}



 ?>