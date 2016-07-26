<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Inicio','establecimientos',TRUE);
		$data['query']=$this->establecimientos->get();
		$data['query2']=$this->establecimientos->get2();
		$data['query3']=$this->establecimientos->get3();
		$this->load->view('header');
		$this->load->view('inicio',$data);
		$this->load->view('footer');

	}

	public function ver(){
		$this->load->view('page2');
	}
}
