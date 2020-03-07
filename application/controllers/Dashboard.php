<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MAIN_Controller {

	public function index()
	{

		$data['title'] = $this->title = 'dashboard';
		$data['navbar'] = $this->load->view('admin/inc/navbar','',true);	
		$data['footer'] = $this->load->view('admin/inc/footer','',true);

		$this->view_back('admin/dashboard',$data);
	}
}
