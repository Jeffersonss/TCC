

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
		<center><h1>PESQUISAR ELEITOR </h1></center>
	</div>
    <br>
                   <div id="page-heading"> 
                   <table>                
                   
                <tr>
			

                    <form method="post" action="" name="pesuisa_eleitor">
                
            <th>Nome do Eleitor:</th><td><input type="text" name="nome" size="40"/></td><td>&nbsp;</td>
             <th>rg:</th><td><input type="text" name="rg" size="40"/></td><td>&nbsp;</td>
                <td><input name="pesquisar" type="submit" class="submit-login" value="Pesquisar"/></td>
                    </form>
            </tr>
            </table> 
            </div>
            <hr>   
            <?php
  include_once '../../classes/eleitor/Eleitor.php';
            include_once '../../classes/eleitor/EleitorDAO.php';


            if (!empty($_POST['pesquisar'])) {
                $objEleitor = new Eleitor();
                $objEleitor->setNome($_POST['nome']);
                $objEleitor->setRg($_POST['rg']);
                $resultado = EleitorDAO::PesquisarEleitor($objEleitor);

                if ($resultado == true) {
                echo "<center><table id='Tabela'>";
                echo "<tr><th >NOME DO ELEITOR &nbsp; </th> ";
                echo "<th >RG &nbsp; </th> ";
                echo "<th >CPF&nbsp; </th> ";
                echo "<th>EMPRESA &nbsp; </th> ";
                echo "<th >  OPÇÕES &nbsp;  </th></tr>"; 

                    foreach ($resultado as $rs) {
                
                echo"<tr>";
                echo "<td>".$rs['nome']."</td>";
                echo "<td>".$rs['rg']."</td>";
                echo "<td>".$rs['cpf']."</td>";
                echo "<td>".$rs['empresa']."</td>";
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
