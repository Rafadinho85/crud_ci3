<?php
	class Model_Usuario extends CI_Model	{

		function __construct()
		{
		parent::__construct();
		$this->load->database();
		}
		//la funcion de select * en sql
		public function selPerfil(){
			$query = $this->db->query("Select * from perfil");
			//retormamos todos los registros de la tabla perfil
			return $query->result();
		}

		//funcion para insertar usuario
		public function insertUsuario($idper, $nombres, $apellidos, $correo, $telefono)
		{

			$arrayDatos = array(
				'per_id'	=> $idper,
				'usu_nombres' => $nombres,
				'usu_apellidos' =>$apellidos,
				'usu_correo'	=>$correo,
				'usu_telefono'	=>$telefono
			);
			$this->db->insert('usuario', $arrayDatos);
		}
	}
