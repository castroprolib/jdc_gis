<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAIN_Controller extends CI_Controller {

	// solo las clases que heredan de esta pueden usar esta propiedad
	protected $title;
	
	protected function test()
	{
		echo "main";
	}


	protected function view_front($view, $data = null)
	{
		/*
		El parametro por defecto es false, y me cargaria la vista,
		al cambiar el parametro a true no carga la vista en el navegador

		*/
		$data['content'] = $this->load->view($view,$data,true);
		$this->load->view('layouts/front',$data);


	}
}
