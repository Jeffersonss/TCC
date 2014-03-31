<?php

include_once 'conexao/Connection.php';
class LoginDAO {
      public static function CadastrarLogin(Login $objLogin) {
        $pdo = Connection::getConnection();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $smtp = $pdo->prepare( "INSERT INTO login (usuario, usuario_idusuario,senha,status) VALUES (?,?,?,?)") ;
        $smtp->bindParam(1, $objLogin->getUsuario(), PDO::PARAM_STR);
        $smtp->bindParam(2, $objLogin->getUsuario_idusuario(), PDO::PARAM_STR);
        $smtp->bindParam(3, $objLogin->getSenha(), PDO::PARAM_STR);
        $smtp->bindParam(4, $objLogin->getStatus(), PDO::PARAM_STR);
        $ok = $smtp->execute();
        return $ok;
    }
     public static  function Logar(Login $objLogin) {
        $pdo = Connection::getConnection();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $smtp = $pdo->prepare("SELECT * FROM login WHERE (usuario = :usuario) AND (senha = :senha)");
        $login = $objLogin->getUsuario();
        $senha = $objLogin->getSenha();
        $smtp->bindParam(":usuario", $login, PDO::PARAM_STR);
        $smtp->bindParam(":senha", $senha, PDO::PARAM_STR);
        $smtp->execute();
        $ok = $smtp->fetchAll();
        if (is_array($ok)) {
            return $ok;
        } else {
            return false;
        }
    }
     public static function PesquisarLogin(Login $objLogin) {
        $pdo = Connection::getConnection();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $smtp = $pdo->prepare("SELECT * FROM login WHERE usuario LIKE '".$objLogin->getUsuario()."%'");
        $smtp->execute();
        $ok = $smtp->fetchAll();
       return $ok;
    }
     public static function StatusLogin(Login $objLogin) {
        $pdo = Connection::getConnection();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $smtp = $pdo->prepare("UPDATE login SET status = 2  WHERE id = 1");
        $smtp->bindParam(1, $objLogin->getId(), PDO::PARAM_INT);
        $smtp->bindParam(2, $objLogin->getUsuario_idusuario(), PDO::PARAM_INT);
        $smtp->bindParam(3, $objLogin->getUsuario(), PDO::PARAM_INT);
        $smtp->bindParam(4, $objLogin->getSenha(), PDO::PARAM_INT);
        $smtp->bindParam(5, $objLogin->getStatus(), PDO::PARAM_INT);
         $smtp->execute();
        $ok = $smtp->fetchAll();
       return $ok;
    }
     public static  function MostrarLogin(Login $objLogin) {
        $pdo = Connection::getConnection();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $smtp = $pdo->prepare("UPDATE  login SET id=? WHERE id=?");
        $smtp->bindParam(1, $objLogin->getStatus(), PDO::PARAM_STR);
        $ok = $smtp->execute();
        return $ok;
    }
     public static function DeletarLogin(Login $objUsuario) {
        $pdo = Connection::getConnection();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $smtp = $pdo->prepare("DELETE FROM login WHERE id=?");
        $smtp->bindParam(1, $objUsuario->getId(), PDO::PARAM_INT);
        $ok = $smtp->execute();
        return $ok;
    }

    public static  function AlterarLogin(Login $objLogin)
  {
      //Conexao com o banco de dados
      $pdo = Connection::getConnection();
      //padrao de erros
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

      // Prepara a query para execuï¿½ï¿½o
      $stmt = $pdo->prepare("UPDATE login SET usuario = :usuario, senha = :senha,status = :status  WHERE id= :id");

      // Tratamento do valor do $_GET, execuï¿½ï¿½o da query
     $valor= $stmt->bindParam(':id', $objLogin->getId());
      // Valida os valores do $_POST de execuï¿½ï¿½o da query
     $valor= $stmt->bindParam(':usuario', utf8_decode($objLogin->getUsuario()));
     $valor= $stmt->bindParam(':senha', utf8_decode($objLogin->getSenha()));
     $valor= $stmt->bindParam(':status', utf8_decode($objLogin->getStatus()));
     


	
  }
        public function buscarID($id){
        $pdo= Connection::getConnection();
        $pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        $stmt = $pdo->prepare("SELECT * FROM login WHERE id = :id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        $ok = $stmt->fetchAll();
            if(is_array($ok)){
                return $ok;
            }
            else{
                return false;
            }
    }
  
  
  

}