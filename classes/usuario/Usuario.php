<?php

class   Usuario {
    public $idUsuario;
     public $nome;
     public $rg;
     public $cpf;
     public $perfil;
             
    
 function  Usuario ($idUsuario=null, $nome=null, $rg=null,$cpf=null, $perfil=null) {
         $this->idUsuario = $idUsuario;
         $this->nome = $nome;
         $this->rg = $rg;
         $this->cpf = $cpf;
         $this->perfil = $perfil;
}
public function getIdUsuario() {
    return $this->idUsuario;
}

public function setIdUsuario($idUsuario) {
    $this->idUsuario = $idUsuario;
}

public function getNome() {
    return $this->nome;
}

public function setNome($nome) {
    $this->nome = $nome;
}

public function getRg() {
    return $this->rg;
}

public function setRg($rg) {
    $this->rg = $rg;
}

public function getCpf() {
    return $this->cpf;
}



public function setCpf($cpf) {
    $this->cpf = $cpf;
}

public function getPerfil() {
    return $this->perfil;
}

public function setPerfil($perfil) {
    $this->perfil = $perfil;
}


}





