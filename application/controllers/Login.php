<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MAIN_Controller {


	// public function __construct()
	// {

		
	// }

	public function index()
	{
		// $this->test();
		// $data = $this->load->view('login');

		// $data = $this->load->view('login', '', true);

		// echo gettype($data);

		// $data = array();
		// $data = $this->load->view('login');

		$data['title'] = $this->title = 'login';
		$data['navbar'] = $this->load->view('inc/navbar','',true);
		// segundo parametro como vacio que que no cargue la vista
		$data['footer'] = $this->load->view('inc/footer','',true);

		$this->view_front('login',$data);
	}
}
