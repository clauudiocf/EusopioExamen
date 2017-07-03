<?php

class Usuarios{
    public $rut;
    function get_rut(){
        return $this->rut;
    }
    function set_rut($rut){
        return $this->rut = $rut;
    }
      public $user;
    function get_user(){
        return $this->user;
    }
    function set_user($user){
        return $this->user = $user;
    }
      public $pass;
    function get_pass(){
        return $this->pass;
    }
    function set_pass($pass){
        return $this->pass = $pass;
    }
      public $privilegio;
    function get_privilegio(){
        return $this->privilegio;
    }
    function set_privilegio($privilegio){
        return $this->privilegio = $privilegio;
    }
}