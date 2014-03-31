<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//BR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

    <?php
session_start();
?>
 
    <?php
include_once 'Login.php';
include_once 'LoginDAO.php';

$objLogin= new Login(null,$_POST['usuario'], $_POST['senha']);
$ok = LoginDAO::Logar($objLogin);
if ($ok == false) {
	echo "<center>  LOGIN OU SENHA INVÁLIDOS </center>";
   
    echo "<br/><a href='index.html' > </a>";
} else {
    foreach ($ok as $usuario) {
    }

 


    $_SESSION['id'] = $usuario['id'];
    $_SESSION['usuario'] = $usuario['usuario'];
    $_SESSION['senha'] = $usuario['senha'];
     
    header("Location: menu.php");     
     
            $ok = LoginDAO::StatusLogin($objLogin);
                              
 }
  ?> 
 <a href="index.html"> <div id='page-heading'><h1> VOLTAR</h1></center></div></a> </div>
    


</div>
</body>

</html>

