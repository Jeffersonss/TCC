<?php

include_once 'Login.php';
            include_once 'LoginDAO.php';

            
            $objLogin = new Login(null, $_POST['usuario_idusuario'], $_POST['usuario'],
                            $_POST['senha'], $_POST['status'] );
            
            $ok = LoginDAO::CadastrarLogin($objLogin);
            if ($ok == true) {
                echo "dados corretos";
            } else {
                echo "errado";
            }