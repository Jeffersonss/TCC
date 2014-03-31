<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />            
</html>

<?php

 include_once '../../classes/usuario/Usuario.php';
            include_once '../../classes/usuario/UsuarioDAO.php';

            
            $objUsuario = new Usuario(null, $_POST['nome'], $_POST['rg'],
                            $_POST['cpf'], $_POST['perfil'] );
            
            $ok = UsuarioDAO::CadastrarUsuario($objUsuario);
            if ($ok == true) {
                echo "dados corretos";
            } else {
                echo "errado";
            }
