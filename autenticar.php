<?php
session_start();
?>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
}
if (isset($_SESSION['senha'])) {
    $senha = $_SESSION['senha'];
}

if (!(empty($usuario) && empty($senha))) {
    include_once 'Login.php';
    include_once 'LoginDAO.php';
    $objUsuario = new Login(null, $usuario, $senha, null);
    $ok = LoginDAO::Logar($objUsuario);
    if ($ok == false) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        echo "Usuario Inválido";
        echo "<br/><a href='menu.php'>voltar</a>";
        exit;
    }
} else {
    echo "Voce não efetuou Login";
    echo "<br/><a href='index.html'>voltar</a>";
    exit;
}


