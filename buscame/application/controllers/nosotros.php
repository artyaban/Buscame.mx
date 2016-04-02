<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	function __construct()
	{

		parent::__construct();
	}

	public function hola()
	{
		$this->load->view('header');
		$this->load->view('nosotros');
		$this->load->view('footer');


		
	}
	

	public function ver(){
		$this->load->view('page2');
	}
}
