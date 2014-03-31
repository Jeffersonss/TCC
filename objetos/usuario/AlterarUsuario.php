<?php
include_once '../../classes/usuario/Usuario.php';
            include_once '../../classes/usuario/UsuarioDAO.php';

            if (empty($_POST['nome'])) {
            $erro = "Opss. você esqueceu de preencher algum campo. Vamos tentar novamente com mais calma!!";
        } else {
            
            $objUsuario = new Usuario($_POST['idUsuario'], $_POST['nome'], $_POST['rg'],$_POST['cpf'],$_POST['perfil']);

            $ok = UsuarioDAO::AlterarUsuario($objUsuario);
            if ($ok == true) {
               echo "DONE!";
                
            } else {
                 echo"UNDONE";
            }
            }
 