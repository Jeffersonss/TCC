<?php

include_once '../../conexao/Connection.php';
class ResultadoDAO {
    
     public static  function CadResultado(Chapa $objChapa)
    {
    $pdo= Connection::getConnection();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $sql = "INSERT INTO resultado (idresu,voto_Nulo,voto_Branco, voto_Total, status) VALUES (:idresul,:voto_Nulo,:voto_Branco, Voto_Total, status)";

        $stmt = $pdo->prepare($sql);
       $valor=$stmt->bindParam(":idresu",$objResultado->getIdResu());
       $valor= $stmt->bindParam(":voto_Nulo", $objResultado->getVoto_Nulo());
       $valor= $stmt->bindParam(":voto_Branco", $objResultado->getVoto_Branco());
       $valor=$stmt->bindParam(":voto_Total",$objResultado->getVoto_Total());
       $valor= $stmt->bindParam(":status", $objResultado->getStatus());
    $ok = $stmt->execute();
    return $ok;
    }
public  static function PesquisarChapa(Chapa $objChapa)
  {
            $pdo = Connection::getConnection();
      
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
     $ok= $pdo->prepare ("SELECT * FROM chapa where nome_chapa like '". $objChapa->getNome_chapa()."%'" );
      

      $ok->execute();
      $stmt=$ok->fetchall();
      return $stmt;

   }      
    
    
    
    }