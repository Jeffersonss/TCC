<?php

class Chapa {
    public $id_chapa;
     public $nome_chapa;
     public $imagem_chapa;
         
 function Chapa($id_chapa=null, $nome_chapa=null, $imagem_chapa=null) {
         $this->id_chapa = $id_chapa;
         $this->nome_chapa = $nome_chapa;
         $this->imagem_chapa = $imagem_chapa;
        
}
public function getId_chapa() {
    return $this->id_chapa;
}

public function setId_chapa($id_chapa) {
    $this->id_chapa= $id_chapa;
}

public function getNome_chapa() {
    return $this->nome_chapa;
}

public function setNome_chapa($nome_chapa) {
    $this->nome_chapa = $nome_chapa;
}

public function getImagem_chapa() {
    return $this->imagem_chapa;
}

public function setImagem_chapa($imagem_chapa){

  $this->imagem_chapa = $imagem_chapa;
}




}
