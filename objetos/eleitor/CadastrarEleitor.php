<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />            
</html>

<?php

 include_once '../../classes/eleitor/Eleitor.php';
            include_once '../../classes/eleitor/EleitorDAO.php';

            
            $objEleitor = new Eleitor(null, $_POST['nome'], $_POST['rg'],
                            $_POST['cpf'], $_POST['empresa']);
            
            $ok = EleitorDAO::CadastrarEleitor($objEleitor);
            if ($ok == true) {
                echo "dados corretos";
            } else {
                echo "errado";
            }
