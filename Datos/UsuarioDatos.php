<?php

include '../Entidades/Usuarios.php';
include 'Conexion.php';

class UsuarioDatos{
    function insertarUsuarios($user,$pass){
        $cnn = new Conexion();
        $con = $cnn->Conectar();
        
        $user = new Usuarios();
        $user->user=$user;
        $user->pass=  base64_encode($pass);
        mysql_select_db($con,"eusopio");
        //* RELLENAR CON PROYECTO https://www.youtube.com/watch?v=2mP4ACi3dIk
    }
}