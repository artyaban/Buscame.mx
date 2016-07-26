<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Error404 extends CI_Controller { 
   
   public function index(){
    $this->load->view('header');
    $this->load->view('error_404');          
    $this->load->view('footer');

   }
}