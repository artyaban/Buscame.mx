<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscame extends CI_Controller {

	function __construct()
	{

		parent::__construct();
	}

	public function hola()
	{

		$this->load->model('categorias','categoria',TRUE);
		$this->load->model('inicio','establecimientos',TRUE);
		$data['categorias']=$this->categoria->get();
		$data['establecimientos']=$this->establecimientos->getall();

		
		$this->load->view('header');
		$this->load->view('buscame',$data);
		$this->load->view('footer');


		
	}

	public function verCategoria()
	{
		
		$var= $this->input->post('valor');
		$this->load->model('categorias','categoria',TRUE);
		$this->load->model('inicio','establecimientos',TRUE);
		$data['categorias']=$this->categoria->get();
		$data['establecimientos']=$this->establecimientos->getestcat($var);
		
		
		$this->load->view('header');
		$this->load->view('buscame',$data);
		$this->load->view('footer');


		
	}

	
	public function ver(){
		$this->load->view('page2');
	}


	public function busqueda()
	{
		$buscar= $this->input->post('search');
		
	
		$this->load->model('categorias','categoria',TRUE);
		$this->load->model('inicio','establecimientos',TRUE);
		$data['categorias']=$this->categoria->get();
		$data['establecimientos']=$this->establecimientos->getbusqueda($buscar);

		
		$this->load->view('header');
		$this->load->view('buscame',$data);
		$this->load->view('footer');
	}

}
