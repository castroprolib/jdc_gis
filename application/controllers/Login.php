<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MAIN_Controller {
	
	public function index()
	{
		$this->test();
		$this->load->view('login');
	}
}
