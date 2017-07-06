<?php

include "../controlador/usuariosControlador.php";

if(isset($_POST["user"]) || isset($_POST["pass"])){
    if(trim($_POST["user"]) == "" || trim($_POST["pass"]) == ""){
        echo "false";
    }else{
        $usuariosCon = new usuariosControlador();
        $user = $usuariosCon->validar($_POST["user"],$_POST["pass"]);

        if(count($user) > 0){

            session_start();
            $_SESSION["id"] = $user["id"];
            $_SESSION["user"] = $user["user"];
            $_SESSION["privilegio"] = $user["privilegio"];
            echo "true";

        }else{
            echo "false";
        }
    }
}else{
    echo "false";
}


?>