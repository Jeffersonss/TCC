<?php

class Resultado{
    public $idResu;
    public $voto_Nulo;
    public $voto_Branco;
    public $voto_Total; 
    public $status; 
    
    function Resultado($idResu=null, $voto_Nulo=null, $voto_Branco=null, $voto_Total=null, $status=null){
    $this->idResu = $idResu;
    $this->voto_Nulo = $voto_Nulo;
    $this->voto_Branco = $voto_Branco;
    $this->voto_Total = $voto_Total;        
    $this->status = $status;   
    }
    public function getIdResu() {
        return $this->idResu;
    }

    public function getVoto_Nulo() {
        return $this->voto_Nulo;
    }

    public function getVoto_Branco() {
        return $this->voto_Branco;
    }

    public function getVoto_Total() {
        return $this->voto_Total;
    }

    public function getStatus(){
        return $this->status;
    }
    
    public function setIdResu($idResu) {
        $this->idResu = $idResu;
    }

    public function setVoto_Nulo($voto_Nulo) {
        $this->voto_Nulo = $voto_Nulo;
    }

    public function setVoto_Branco($voto_Branco) {
        $this->voto_Branco = $voto_Branco;
    }

    public function setVoto_Total($voto_Total) {
        $this->voto_Total = $voto_Total;
    }    
    
    public function setStatus($status){
        $this-> status = $status;
    }
    }