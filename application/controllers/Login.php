<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MAIN_Controller {
	
	public function index()
	{
		// $this->test();
		// $data = $this->load->view('login');

		// $data = $this->load->view('login', '', true);

		// echo gettype($data);

		// $data = array();
		// $data = $this->load->view('login');

		$this->view_front('login');
	}
}
