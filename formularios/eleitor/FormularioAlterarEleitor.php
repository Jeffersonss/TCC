<?php

 include_once '../../classes/eleitor/Eleitor.php';
        include_once '../../classes/eleitor/EleitorDAO.php';
        $objEleitor = new Eleitor($_GET['id'],null,null,null,null,null,null);
        $linha = EleitorDAO::MostrarEleitor($objEleitor);
        foreach($linha as $row){
        ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../template1/css/screen.css" rel="stylesheet" type="text/css">
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

    <form action="../../objetos/eleitor/AlterarEleitor.php" method="POST" >
         <center><table border="0" cellpadding="0" cellspacing="0"  id="id-form">	
                <td>
                <div id="page-heading"><h1>ALTERAR ELEITOR</h1></div>
                <br/>
                </td>
                <tr>
				<input type="hidden" name="id" value="<?php echo  $row['id'] ; ?>"/>
				<th valign="top">NOME</th>
                <th valign="top"><input type="text" name="nome" value="<?php echo $row['nome'] ; ?>"/></th>
                </tr>
                <tr>
				<th valign="top">RG</th>
                <td><input type="text" name="rg" value="<?php echo $row['rg'] ; ?>" /></td>
                </tr>
                <tr>
				<th valign="top">CPF</th>
                <td><input type="text" name="cpf" value="<?php echo $row['cpf'] ; ?>"/></td>
                </tr>
                <tr>
				<th valign="top">EMPRESA</th>
                <td><input type="text" name="empresa" value="<?php echo $row['empresa'] ; ?>"/></td>
                </tr>
                <tr>
				
              <br>        
                   <center><input type="submit" name="alterar"  value="Alterar" class="form-submit"/></center>
               
                 </table></center>
       </form>
      <?php } ?>


