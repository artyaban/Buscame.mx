<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalles extends CI_Controller {

	function __construct()
	{

		parent::__construct();
	}

	public function index()
	{
		$var= $this->input->post('valor');
		$this->load->model('inicio','establecimientos',TRUE);
		$data['query']=$this->establecimientos->getdetalle($var);		
		$this->load->view('header');
		$this->load->view('detalless',$data);
		$this->load->view('footer');


		
	}
	

	public function ver(){
		$this->load->view('page2');
	}
}
