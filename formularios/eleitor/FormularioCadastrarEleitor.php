<html>
<body>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../../js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="../../js/jquery.maskedinput-1.3.js" type="text/javascript"></script>
<script src="../../js/jquery-validation-1.8.1/lib/jquery.validate.min.js" type="text/javascript"></script>
  
<script type="text/javascript">
$(document).ready( function() {
$("form").validate({

rules:{
    nome:{required: true},
    cpf:{required: true,cpf: true},
    endereco:{required:true},
    cidade:{required:true},
    data:{required:true,dateBR:true},  
    estado:{required:true}, 
    pais:{required:true},
    cep:{required:true},
    telefone:{required:true},
    identidade:{required:true}
},   

messages:{
	nome:{required: "*"},
	cpf:{required: "*", cpf:"Digite um cpf valido"},
    endereco:{required:"*"},
    cidade:{required:"*"},
    data:{required:"*",dateBR:"Data invalida"},
    estado:{required:"*"}, 
    pais:{required:"*"},
    cep:{required:"*"},
	telefone:{required:"*"},
    identidade:{required:"*"}
}
});
});


jQuery(function($){
        $("#telefone").mask("(99) 9999-9999"); //Aqui montamos a mÃƒÂ¡scara que queremos
        $("#cpf").mask("999.999.999-99");
        $("#data").mask("99/99/9999");
        $("#celular").mask("(99) 9999-9999");
        $("#identidade").mask("99.999.999-9");    
})   
</script>


<form action="../../objetos/eleitor/CadastrarEleitor.php" method="POST" name=FormularioCadastrarEleitor >
     <center><table border="0" cellpadding="0" cellspacing="0"  >	
                <td>
                <div><h1>CADASTRAR Eleitor</h1></div>
                <br/>
                </td>
                <tr>
           
             <th valign="top">NOME COMPLETO</th>
           
             <td><input type="text" name="nome" id="nome" /></td>      
         </tr>
         <tr>
           <th valign="top">RG</th>
           <td><input type="text" name="rg" id="rg" /></td>
         </tr>
         <tr>
         <tr>
           <th valign="top">CPF</th>
           <td><input type="text" name="cpf" id="cpf" /></td>
         </tr>
           <tr>
           <th valign="top"> Empresa</th>
           <td><input type="text" name="empresa" id="empresa"/></td>
         </tr>
         <tr>
            
      <td>
              <br> <br>          
                 
         <center><input type="submit" name="Cadastrar"  value="Cadastrar" class="form-submit"/></center>
             </td>
          </table></center>

</form>



</body>
</html>
