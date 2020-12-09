<?php session_start();
	include('../conexion.php');
	
	class Perfil{

		private $uClave;
		private $sNombre;
		private $sPassword;
		private $sFoto;
	
		function setClave($data){
			$this->uClave = $data;
		}
		
		function getClave(){
			return $this->uClave;
		}

		function setNombre($data){
			$this->sNombre = $data;
		}

		function getNombre(){
			return $this->sNombre;
		}

		function setPassword($data){
			$this->sPassword = $data;
		}

		function getPassword(){
			return $this->sPassword;
		}

		function setFoto($data){
			$this->sFoto = $data;
		}

		function getFoto(){
			return $this->sFoto;
		}
		

	    public function ObtenerUsuario(){
	        $array = null;
	        $oConexion = new conexion();
	        $sQuery = "SELECT * FROM usuario WHERE nombre_usuario =".$_SESSION["nombre_usuario"]."';";;
	        if($oConexion->conecta()){
	            $oDatos = $oConexion->ejecutaConsulta($sQuery);
	            if($oDatos){
	                for($i = 0;$i < count($oDatos); $i++){
	                  	$producto = new Perfil();
	                  	$producto->setClave($oDatos[$i][0]);
	                  	$producto->setNombre($oDatos[$i][1]);
	                 	$producto->setPassword($oDatos[$i][2]);
	                 	$producto->setFoto($oDatos[$i][3]);
	                  	$array[$i] = $producto;
	              	}
	            }
	        }
	        return $array;
	    }

	    public function Modificar(){
          $oConexion = new conexion();
          $oRet = -1;
            $sQuery ="UPDATE Usuarios SET nombre_usuario ='".$this->sNombre."',
              contrasena='".$this->sPassword."',foto='".$this->sFoto."' WHERE id_usuario='".$this->uClave."';";

          if($oConexion->conecta()){
            $oRet = $oConexion->ejecutarComando($sQuery);

          }
          $oConexion->desconecta();
          return $oRet;
        }

        public function Eliminar(){
          $oConexion = new conexion();
          $oRet = -1;
          $sQuery ="DELETE FROM usuario WHERE id_usuario='".$this->uClave."';";
          if($oConexion->conecta()){
            $oRet = $oConexion->ejecutarComando($sQuery);
//            $oRet = $oConexion->ejecutarComando($sQuery2);
          }
          $oConexion->desconecta();
          return $oRet;
        }

	}
?>