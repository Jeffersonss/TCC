<?php


class Login {
    public $id;
    public $usuario_idusuario;
    public $usuario;
    public $senha;
    public $status;   

    function __construct($id=null, $usuario=null, $senha=null,$status=null,$usuario_idusuario=null) {
        $this->id = $id;
        $this->usuario_idusuario = $usuario_idusuario;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->status = $status;      
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getUsuario_idusuario() {
        return $this->usuario_idusuario;
    }

    public function setUsuario_idusuario($usuario_idusuario) {
        $this->usuario_idusuario = $usuario_idusuario;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getStatus(){
    return $this->status;
   
    }
     public function setStatus($status){
         $this->status = $status;
     }
    
    
    }


