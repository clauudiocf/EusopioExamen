<?php
class Paciente{
    
    var $Rut;
    var $NombreCompleto;
    var $FechaContratacion;
    var $Especialidad;
    var $ValorConsulta;
    
    /*Valida la existencia del usuario*/
    function VerificaAtencion(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM paciente WHERE Rut='$this->Rut'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
    
    
    
}