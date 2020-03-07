<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAIN_Controller extends CI_Controller {
	
	public function test()
	{
		echo "main";
	}


	public function view_front($view)
	{
		/*
		El parametro por defecto es false, y me cargaria la vista,
		al cambiar el parametro a true no carga la vista en el navegador

		*/
		$data['content'] = $this->load->view($view,'',true);
		$this->load->view('layouts/front',$data);


	}
}
