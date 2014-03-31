<?php

class   Eleitor {
    public $id;
     public $nome;
     public $rg;
     public $cpf;
     public $empresa;
     
     
    
 function Eleitor($id=null, $nome=null, $rg=null,$cpf=null, $empresa=null) {
         $this->id = $id;
         $this->nome = $nome;
         $this->rg = $rg;
         $this->cpf = $cpf;
         $this->empresa = $empresa;
           
}
public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
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

public function getEmpresa() {
    return $this->empresa;
}

public function setEmpresa($empresa) {
    $this->empresa = $empresa;
}

}


?>

