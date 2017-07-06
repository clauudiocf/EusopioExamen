<?php

include "../controlador/usuariosControlador.php";

if(isset($_POST["user"]) || isset($_POST["pass"])){
    if(trim($_POST["user"]) == "" || trim($_POST["pass"]) == ""){
        echo "false";
    }else{
        $usuariosCon = new usuariosControlador();
        if($usuariosCon->insertarUsuarios($_POST["user"],$_POST["pass"])){
            echo "true";
        }else{
            echo "false";
        }
    }
}else{
    echo "false";
}

?>