<?php

include "../entidades/usuarios.php";
include "conexion.php";

class usuariosDatos extends conexion {

	public function __construct(){
         $usuarios = new usuarios();
    }

	function insertarUsuarios($user,$pass){

		$con = $this->conectar();
		
		$usuarios = new usuarios();
		$usuarios->user=$usuario;
		$usuarios->pass = base64_encode($pass);
		mysqli_select_db($con,"formLogin");
		$sql = "INSERT INTO usuarios (user,pass) VALUES(
		'".$user->user."',
		'".$user->pass."'
		)";
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}
		mysqli_close($con);

	}

    function validar($user,$pass){
		$con = $this->conectar();
		$usuarios = new usuarios();
		$usuarios->user=$user;
		$usuarios->pass= base64_encode($pass);
        
		mysqli_select_db($con,"formLogin");
        
		$sql = "SELECT * FROM usuarios WHERE usuario='".$user->user."' and contrasena='".$user->pass."'";
        $consulta = mysqli_query($con,$sql);
        $fila = mysqli_fetch_array($consulta);
        if($fila>0){
            if($fila["usuario"] == $user->user && $fila["contrasena"]==$user->pass){
                return $fila;
            }
        }

    }

 

    public function getDatoU($user,$pass){
		$con = $this->conectar();
		$usuarios = new usuarios();
		$usuarios->user=$user;
		$usuarios->contrasena = base64_encode($pass);
        
		mysqli_select_db($con,"formLogin");
        
		$sql = "SELECT * FROM usuarios WHERE usuario='".$user->user."' and contrasena='".$user->contrasena."'";
        $consulta = mysqli_query($con,$sql);
        $fila = mysqli_fetch_array($consulta);
        if($fila>0){
            if($fila["usuario"] == $user->user && $fila["contrasena"]==$user->pass){
                return json_encode($fila);
            }
        }else{
            return "";
        }

    }

}
?>