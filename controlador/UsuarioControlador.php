<?php

include "../Datos/UsuarioDatos.php";

class UsuarioControlador{
   
     function insertarUsuarios($user,$pass){
         $obj = new UsuarioDatos();
         return $obj->insertarUsuarios($user,$pass);
     }
      function validar($user,$pass){
          $obj = new UsuarioDatos();
          return $obj->validar($user,$pass);
      }
      function getId($user,$pass){
          $obj = new UsuarioDatos();
          return $obj->getId($user,$pass);
      }
}
?>