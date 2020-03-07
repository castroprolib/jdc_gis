<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAIN_Controller extends CI_Controller {
	
	public function test()
	{
		echo "main";
	}


	public function view_front()
	{

		$this->load->view('layouts/front');


	}
}
