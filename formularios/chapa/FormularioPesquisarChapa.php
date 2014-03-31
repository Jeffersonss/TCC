<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../template1/css/screen.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="content-outer">

<div id="content">


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="../template1/images/shared/side_shadowleft.jpg" width="20" height="300" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="../template1/images/shared/side_shadowright.jpg" width="20" height="300" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>	
		
		<div id="step-holder">
			<div id="page-heading">
		<center><h1>PESQUISAR CHAPA </h1></center>
	</div>
    <br>
                   <div id="page-heading"> 
                   <table>                
                   
                <tr>
			

                    <form method="post" action="" name="pesuisa_chapa">
                
            <th>Nome da chapa:</th><td><input type="text" name="nome_chapa" size="40"/></td><td>&nbsp;</td>
             <th>imagem:</th><td><input type="text" name="imagem_chapa" /></td><td>&nbsp;</td>
                <td><input name="pesquisar" type="submit" class="submit-login" value="Pesquisar"/></td>
                    </form>
            </tr>
            </table> 
            </div>
            <hr>   
            <?php
  include_once '../../classes/chapa/Chapa.php';
            include_once '../../classes/chapa/ChapaDAO.php';


            if (!empty($_POST['pesquisar'])) {
                $objChapa = new Chapa();
                $objChapa->setNome_chapa($_POST['nome_chapa']);
                $resultado = ChapaDAO::PesquisarChapa($objChapa);

                if ($resultado == true) {
                echo "<center><table id='Tabela'>";
                echo "<tr><th >NOME DA CHAPA &nbsp; </th> ";
                echo "<th >IMAGEM &nbsp; </th> ";
                echo "<th >  OPÇÕES &nbsp;  </th></tr>"; 

                    foreach ($resultado as $rs) {
                
                echo"<tr>";
                echo "<td>".$rs['nome_chapa']."</td>";
                echo "<td>".$rs['imagem_chapa']."</td>";
                echo "<td><a href='../eleitor/FormularioAlterarEleitor.php?id=" . $rs['id'] . "'/><center><img src='../template1/images/forms/editar.PNG' width='30' height='30'/> &nbsp;</a>";
                echo "<a href='../eleitor/FormularioExcluirEleitor.php?id=" . $rs['id'] . "'/> <img src='../template1/images/forms/excluir.PNG' width='30' height='30'/></a></td>";

                        echo "<tr/>";
                    }
                 echo "</table></center>";
                    
                } else {
                    echo "nada encontrado";
                }
            }
            ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
</td>
</div>
</div>
<div class="clear">&nbsp;</div>
</div>


			




</body>
</html>

