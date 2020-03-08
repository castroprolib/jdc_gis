<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MAIN_Controller {

	public function index()
	{

		echo "rest api";
	}


	public function countrys()
	{

		$data = $this->Country_Model->getCountrys();

		// echo json_encode($data);

		// $this->output->set_header('HTTP/1.0 200 OK');

		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));

		
	}


}
