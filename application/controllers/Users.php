<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MAIN_Controller {

	public function index()
	{

		$data['title'] = $this->title = 'users';
		$data['navbar'] = $this->load->view('admin/inc/navbar','',true);	
		$data['footer'] = $this->load->view('admin/inc/footer','',true);

		$this->view_back('admin/users/users',$data);
	}

	public function create()
	{

		$data['title'] = $this->title = 'users';
		$data['navbar'] = $this->load->view('admin/inc/navbar','',true);	
		$data['footer'] = $this->load->view('admin/inc/footer','',true);

		$this->view_back('admin/users/create',$data);
		
	}

	public function store()
	{
		
	}


	public function show($id)
	{
		
	}

	public function edit($id)
	{
		
	}

	public function update($id)
	{
		
	}

	public function destroy($id)
	{
		
	}
}
