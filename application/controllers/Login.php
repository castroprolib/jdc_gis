<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MAIN_Controller {
	
	public function index()
	{
		// $this->test();
		// $data = $this->load->view('login');

		// $data = $this->load->view('login', '', TRUE);

		// echo gettype($data);

		$this->view_front();
	}
}
