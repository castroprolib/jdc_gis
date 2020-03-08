<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Model extends CI_Model {

	private $tableName = 'countrys';

	private $country_id = 'country_id';

	private $country = 'country';
	

	public function getCountrys()
	{

		// $this->db->select('country_id,country');
		// $this->db->from('countrys');

		$data = array(
			'country_id' => $this->country_id,
			'country' => $this->country
		);

		// le paso la data como array
		$this->db->select($data);
		$this->db->from($this->tableName);
		$query = $this->db->get()->result();

		return $query;
		
	}


}
