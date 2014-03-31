
<?php
include_once '../../classes/eleitor/Eleitor.php';
            include_once '../../classes/eleitor/EleitorDAO.php';

            if (empty($_POST['nome'])) {
            $erro = "Opss. você esqueceu de preencher algum campo. Vamos tentar novamente com mais calma!!";
        } else {
            
            $objEleitor = new Eleitor($_POST['id'], $_POST['nome'], $_POST['rg'],$_POST['cpf'],$_POST['empresa']);

            $ok = EleitorDAO::AlterarEleitor($objEleitor);
            if ($ok == true) {
               echo "<br><br><br><br><br><br><center><img src='../template1/images/shared/Concluído.png' target='centro'/><center>";
                
            } else {
                 echo"<br><br><br><br><br><br><center><img src='../template1/images/shared/Errado.png' target='centro'/></center>";
            }
            }
 