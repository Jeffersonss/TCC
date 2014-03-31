<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />            
</html>
<?php

include_once '../../conexao/Connection.php';
class EleitorDAO {
     public static  function CadastrarEleitor(Eleitor $objEleitor)
    {
    $pdo= Connection::getConnection();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $sql = "INSERT INTO eleitor (id,nome,rg,cpf,empresa) VALUES (:id,:nome,:rg,:cpf,:empresa)";

        $stmt = $pdo->prepare($sql);
        $valor=$stmt->bindParam("id",$objEleitor->getId());
        $valor=$stmt->bindParam(":nome", $objEleitor->getNome());
        $valor=$stmt->bindParam(":rg", $objEleitor->getRg());
        $valor=$stmt->bindParam(":cpf", $objEleitor->getCpf());
        $valor=$stmt->bindParam(":empresa", $objEleitor->getEmpresa());
        
   $ok = $stmt->execute();
    return $ok;
    }
public  static function PesquisarEleitor(Eleitor $objEleitor)
  {
            $pdo = Connection::getConnection();
      
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
     $ok= $pdo->prepare ("SELECT * FROM eleitor where nome like '". $objEleitor->getNome()."%'" );
      

      $ok->execute();
      $stmt=$ok->fetchall();
      return $stmt;

   }      
   public static  function MostrarEleitor(  Eleitor $objEleitor) {
        //Conexao com o banco de dados
        $pdo = Connection::getConnection();
        //padrao de erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        // Prepara a query para execuÃ§Ã£o
        $stmt = $pdo->prepare('SELECT * FROM eleitor where id = ?');
        // ExecuÃ§Ã£o da query e contagem de linhas do resultado
        $codigo = $objEleitor->getId();
        $stmt->bindParam(1,$codigo);
        $stmt->execute();
        return $stmt;
    } 
   public static  function AlterarEleitor(Eleitor $objEleitor)
  {
      //Conexao com o banco de dados
      $pdo = Connection::getConnection();
      //padrao de erros
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

      // Prepara a query para execuï¿½ï¿½o
      $stmt = $pdo->prepare("UPDATE eleitor SET nome = :nome, rg = :rg,cpf = :cpf, empresa = :empresa WHERE id = :id");

      // Tratamento do valor do $_GET, execuï¿½ï¿½o da query
     $valor= $stmt->bindParam(':id', $objEleitor->getId());
      // Valida os valores do $_POST de execuï¿½ï¿½o da query
     $valor= $stmt->bindParam(':nome', utf8_decode($objEleitor->getNome()));
     $valor= $stmt->bindParam(':rg', utf8_decode($objEleitor->getRg()));
     $valor= $stmt->bindParam(':cpf', utf8_decode($objEleitor->getCpf()));
     $valor= $stmt->bindParam(':empresa', utf8_decode($objEleitor->getEmpresa()));
          
//Executar o comando sql
      $ok = $stmt->execute();
      // retornar o resultado do cadastro
      return $ok;

  }
   public static  function ExcluirEleitor(Eleitor $objEleitor) {
        $pdo = Connection::getConnection();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $stmt = $pdo->prepare("DELETE FROM eleitor WHERE id= ?");
        $stmt->bindParam(1, $objEleitor->getId());
        $ok = $stmt->execute();
        return $ok;

   
   
  }

}
?>