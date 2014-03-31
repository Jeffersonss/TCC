<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />            
</html>
<?php

include_once '../../conexao/Connection.php';
class UsuarioDAO {
     public static  function CadastrarUsuario(Usuario $objUsuario)
    {
    $pdo= Connection::getConnection();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $sql = "INSERT INTO usuario (idUsuario,nome,rg,cpf,perfil) VALUES (:idUsuario,:nome,:rg,:cpf,:perfil)";

        $stmt = $pdo->prepare($sql);
        $valor=$stmt->bindParam("idUsuario",$objUsuario->getIdUsuario());
        $valor=$stmt->bindParam(":nome", $objUsuario->getNome());
        $valor=$stmt->bindParam(":rg", $objUsuario->getRg());
        $valor=$stmt->bindParam(":cpf", $objUsuario->getCpf());
        $valor=$stmt->bindParam(":perfil", $objUsuario->getPerfil());
       
   $ok = $stmt->execute();
    return $ok;
    }
public  static function PesquisarUsuario(Usuario $objUsuario)
  {
            $pdo = Connection::getConnection();
      
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
     $ok= $pdo->prepare ("SELECT * FROM usuario where nome like '". $objUsuario->getNome()."%'" );
      

      $ok->execute();
      $stmt=$ok->fetchall();
      return $stmt;

   }      
   public static  function MostrarUsuario(  Usuario $objUsuario) {
        //Conexao com o banco de dados
        $pdo = Connection::getConnection();
        //padrao de erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        // Prepara a query para execuÃ§Ã£o
        $stmt = $pdo->prepare('SELECT * FROM usuario where idusuario = ?');
        // ExecuÃ§Ã£o da query e contagem de linhas do resultado
        $codigo = $objUsuario->getIdUsuario();
        $stmt->bindParam(1,$codigo);
        $stmt->execute();
        return $stmt;
    } 
   public static  function AlterarUsuario(Usuario $objUsuario)
  {
      //Conexao com o banco de dados
      $pdo = Connection::getConnection();
      //padrao de erros
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

      // Prepara a query para execuï¿½ï¿½o
      $stmt = $pdo->prepare("UPDATE usuario SET nome = :nome, rg = :rg,cpf = :cpf, perfil = :perfil WHERE idUsuario = :idUsuario");

      // Tratamento do valor do $_GET, execuï¿½ï¿½o da query
     $valor= $stmt->bindParam(':id', $objUsuario->getIdUsuario());
      // Valida os valores do $_POST de execuï¿½ï¿½o da query
     $valor= $stmt->bindParam(':nome', utf8_decode($objUsuario->getNome()));
     $valor= $stmt->bindParam(':rg', utf8_decode($objUsuario->getRg()));
     $valor= $stmt->bindParam(':cpf', utf8_decode($objUsuario->getCpf()));
     $valor= $stmt->bindParam(':perfil', utf8_decode($objUsuario->getPerfil()));
          
//Executar o comando sql
      $ok = $stmt->execute();
      // retornar o resultado do cadastro
      return $ok;

  }
   public static  function ExcluirUsuario(Usuario $objUsuario) {
        $pdo = Connection::getConnection();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $stmt = $pdo->prepare("DELETE FROM usuario WHERE idUsuario= ?");
        $stmt->bindParam(1, $objUsuario->getIdUsuario());
        $ok = $stmt->execute();
        return $ok;

   
   
  }

}
?>
