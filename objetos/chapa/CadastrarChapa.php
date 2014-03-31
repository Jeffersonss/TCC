<?php

 include_once '../../classes/chapa/Chapa.php';
            include_once '../../classes/chapa/ChapaDAO.php';

            
            $objChapa = new Chapa(null, $_POST['nome_chapa'], $_POST['imagem_chapa']);
            
            $ok = ChapaDAO::CadChapa($objChapa);
            if ($ok == true) {
                echo "ok";
            } else {
                echo "not";
            }

