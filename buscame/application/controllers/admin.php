<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	private $usuario;

	public function index()
	{
		

		$this->load->view('header');
		$this->load->view('administrador');
		$this->load->view('footer');


		
	}

	public function session()
	{
		$this->load->model('admin_model','administrador',TRUE);


        $data['query']=$this->administrador->get_all();

		$this->load->view('header_admin');
		$this->load->view('admin_index',$data);
		$this->load->view('footer');		
	}
	public function actualizar()
	{

	$nombre= $this->input->post('nombre');
	$direccion= $this->input->post('direccion');
	$cp= $this->input->post('cp');
	$sitio= $this->input->post('sitio');
	$telefono=$this->input->post('telefono');
	$whatsapp=$this->input->post('whatsapp');
	$celular=$this->input->post('celular');
	$horarios=$this->input->post('horarios');
	$email= $this->input->post('email');
	$descripcion= $this->input->post('descripcion');
	$url= $this->input->post('url');
	$logo= $this->input->post('logo');
	$facebook= $this->input->post('facebook');
	$twitter= $this->input->post('twitter');
	$status=$this->input->post('status');
	$puntos=$this->input->post('puntos');
	$id= $this->input->post('id');
	$this->load->model('admin_model','administrador',TRUE);
	$data['query']=$this->administrador->actualizar($nombre,$direccion,$cp,$sitio,$email,$descripcion,$url,$logo,$telefono,$whatsapp,$celular,$horarios,$facebook,$twitter,$status,$puntos,$id);
	if($data['query']==1)
	{
		
		$data['query']=$this->administrador->get_all();

		$this->load->view('header_admin');
		$this->load->view('admin_index',$data);
		$this->load->view('footer');

	}else{session();}
	}
	public function ver()
	{
		$empresa= $this->input->post('boton');

		$this->load->model('admin_model','administrador',TRUE);
		$data['query']=$this->administrador->get_user_all($empresa);
		$this->load->view('header_admin');
		$this->load->view('admin_vermas',$data);
		$this->load->view('footer');

	}

	public function check()
	{
		

		$usuario= $this->input->post('usuario');
		$password= $this->input->post('password');

		$this->usuario=$usuario;

		$this->load->model('admin_model','administrador',TRUE);
		$data['query']=$this->administrador->get_user($usuario,$password);

		$usuario1='';
		$password1='';
		foreach ($data['query'] as $row)
		{
        $usuario1= $row->usuario;
        $password1=$row->password;
		}


		
		if($usuario1!=''and $password1!='')
		{

		$data['query']=$this->administrador->get_all();

		$this->load->view('header_admin');
		$this->load->view('admin_index',$data);
		$this->load->view('footer');


		}else
		{
		$this->load->view('header');
		$this->load->view('administrador');
		echo '<h1>Usuario Incorrecto....</h1>';
		$this->load->view('footer');
		}



	}


	public function insertar(){
		
  
	$target_path = "logos/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
			} else{
			echo "Ha ocurrido un error, trate de nuevo!";}

	$nombre= $this->input->post('nombre');
	$direccion= $this->input->post('direccion');
	$cp= $this->input->post('cp');
	$sitio= $this->input->post('sitio');
	$email= $this->input->post('email');
	$descripcion= $this->input->post('descripcion');
	$url= $this->input->post('url');
	$logo=basename( $_FILES['uploadedfile']['name']);
	$telefono=$this->input->post('telefono');
	$whatsapp=$this->input->post('whatsapp');
	$celular=$this->input->post('celular');
	$horarios=$this->input->post('horarios');
	$facebook= $this->input->post('facebook');
	$twitter= $this->input->post('twitter');
	$categoria=$this->input->post('categoria');
	$status=1;
	
	$this->load->model('admin_model','administrador',TRUE);
	$data['query']=$this->administrador->insertar($nombre,$direccion,$cp,$sitio,$email,$descripcion,$url,$logo,$telefono,$whatsapp,$celular,$horarios,$facebook,$twitter,$status);
	$this->load->model('categorias','cat',TRUE);
	$data['categori']=$this->cat->insertar($categoria,$nombre);

if($data['query']==1)
	{
		$data['query']=$this->administrador->get_all();
		$this->load->view('header_admin');
		$this->load->view('admin_index',$data);
		$this->load->view('footer');

	}else
	{
		alta();
	}
	}

public function bajas()
{
$confirm="<script>confirm('Deseas continuar?') </script>";
if($confirm==true)
{
  $id= $this->input->post('id');
  $this->load->model('admin_model','administrador',TRUE);
  $data['query']=$this->administrador->eliminar($id);
  $this->baja();
} else{

echo "<script> document.location='http://devbuscame.mx/index.php/admin/baja';</script>";
}
}

	public function alta()
	{
		$this->load->model('categorias','categoria',TRUE);
		$data['categorias']=$this->categoria->get();
		$this->load->view('header_admin');
		$this->load->view('alta',$data);
		$this->load->view('footer');
	}
	public function baja()
	{

$this->load->model('admin_model','administrador',TRUE);
$data['query']=$this->administrador->get_all();

		$this->load->view('header_admin');
		$this->load->view('admin_index2',$data);
		$this->load->view('footer');


		
	}
	public function cambio()
	{

		$this->load->view('header_admin');
		echo 'aqui van cambios en empresas ';
		$this->load->view('footer');
	}
	public function cambioAdmin()
	{   
		$this->load->model('admin_model','administrador',TRUE);
		$data['query']=$this->administrador->getadmins();
		$this->load->view('header_admin');
		$this->load->view('administradores',$data);
		$this->load->view('footer');
	}

	public function updateAdmin()
	{

		$usuario= $this->input->post('usuario');
		$this->usuario=$usuario;
		$pass= $this->input->post('pass');
		$id= $this->input->post('id');
		$this->load->model('admin_model','administrador',TRUE);
		$data['query']=$this->administrador->cambioadmin($usuario,$pass,$id);
		$this->cambioAdmin();
	}

	public function agregarAdmin()
	{
		$usuario= $this->input->post('usuario');
		$this->usuario=$usuario;
		$pass= $this->input->post('pass');
		
		$this->load->model('admin_model','administrador',TRUE);
		$data['query']=$this->administrador->agregaradmin($usuario,$pass);
		$this->cambioAdmin();

	}
}
	