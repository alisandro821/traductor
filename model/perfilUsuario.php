<?php 
include('../conexion.php');

class Usuario{
	private $conn;
	private $link;

	function __construct(){
		$this->conn   = new Conexion();
		$this->link   = $this->conn->conectarse();
	}

	public function getUser(){
		$query = "SELECT * FROM usuario";
		$result = mysqli_query($this->link,$query);
		$data = array();
		while ($data[] = mysqli_fetch_assoc($result));
		array_pop($data);
		return $data;
	}

	public function getUserById($id=NULL){
		if (!empty($id_usuario)) {
			$query = "SELECT * FROM usuario WHERE id_usuario=".$id_usuario;
			$result = mysqli_query($this->link,$query);
			$data = array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}else{
			return false;
		}
	}

	public function setEditUser($data){
		if (!empty($data['id_usuario'])){
			$query =" UPDATE usuario SET nombre_usuario='".$data['nombre_usuario']."', contrasena='".$data['contrasena']."', foto ='".$data['foto']."' WHERE id_usuario=".$data['id_usuario'];
			$result =mysqli_query($this->link,$query);
				if($result){
					return true;
				}else{
					return false;
				}
		}else{
				return false;
		}
	}

	
}


?>