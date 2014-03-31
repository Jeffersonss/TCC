<?php
        include_once '../../classes/eleitor/Eleitor.php';
        include_once '../../classes/eleitor/EleitorDAO.php';
        $objEleitor = new Eleitor($_POST['id'],null, null,null,null);
        $ok = EleitorDAO::ExcluirEleitor($objEleitor);
         if ($ok == true) {
            echo "<br><br><br><br><br><br><center><img src='../template1/images/shared/Concluído.png'target='centro'/><center>";
        } else {
            echo "<br><br><br><br><br><br><center><img src='../template1/images/shared/Errado.png'target='centro'/></center>";
        }

?>
