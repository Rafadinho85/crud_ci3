<?php

class Usuario extends CI_Controller{
	function __construct()
	{
		//llamamos a nuestro modelo
		parent::__construct();
		//comunicacion con el modelo
		$this->load->model("Model_Usuario");

	}
	//funcion que llama al mismo nombre de la vista que tiene
	public function index(){
		//creamos un arreglo
		$data['contenido'] = "usuario/index";		//enviar a plantilla la vista index usuario
		$data['selPerfil'] = $this->Model_Usuario->selPerfil(); //traigo todos los registros de la tabla perfil y se guardan en selPerfil
		$this->load->view("plantilla", $data);
	}
	public function insert(){
		$datos = $this->input->post();

		if (isset($datos)){
			$txtId = $datos['txtIdper'];
			$txtNombres = $datos['txtNombres'];
			$txtApellidos = $datos['txtApellidos'];
			$txtCorreo = $datos['txtCorreo'];
			$txtTelefono = $datos['txtTelefono'];
			$this->Model_Usuario->insertUsuario($txtId, $txtNombres, $txtApellidos,$txtCorreo,$txtTelefono);
		redirect('');
		}
	}

}
