<!doctype html>
<html>
<?php
include_once 'autenticar.php';
include_once 'Login.php';
include_once 'LoginDAO.php';            

?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script>
function confirma()
{
  if (window.confirm("Deseja mesmo sair ?"))
  {
     location.href = 'logout.php';
  }
}
</script>  
    
    
    
    <style  type="text/css">   
   
  body {
  background-color:whitesmoke;
  margin:0px 0px;
  padding: 100px 0px 100px 0px;
}

#rolling-nav {
  font:normal 12px 'Trebuchet MS',Trebuchet,Arial,Sans-Serif;
  color:white;
  text-transform:uppercase;
	/* outline:1px solid; */
	width:550px; /* Fixed width. Measure it manually */
	margin:0px auto;
}

#rolling-nav ul {
  height:50px;
  margin:0px 0px;
  padding:0px 0px;
  overflow:hidden;
}

#rolling-nav li {
  float:left;
  display:inline;
  list-style:none;
  margin:0px 0px;
  padding:0px 0px;
}

#rolling-nav a,
#rolling-nav a:before {
  display:block;
  margin:0px 0px;
  padding:0px 30px;
  line-height:50px;
  color:white;
  text-decoration:none;
  background-color:#900;
  background-image:-webkit-linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  background-image:-moz-linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  background-image:-ms-linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  background-image:-o-linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  background-image:linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  -webkit-box-shadow:inset 0px 1px 0px rgba(255,255,255,0.1);
  -moz-box-shadow:inset 0px 1px 0px rgba(255,255,255,0.1);
  box-shadow:inset 0px 1px 0px rgba(255,255,255,0.1);
  position:relative;
  -webkit-transition:all 0.3s ease-in-out;
  -moz-transition:all 0.3s ease-in-out;
  -ms-transition:all 0.3s ease-in-out;
  -o-transition:all 0.3s ease-in-out;
  transition:all 0.3s ease-in-out;
}

#rolling-nav a:before {
  content:attr(data-clone);
  position:absolute;
  top:100%;
	right:0px;
  left:0px;
  display:block;
  background-color:white;
  background-image:-webkit-linear-gradient(top, #ddd, white);
  background-image:-moz-linear-gradient(top, #ddd, white);
  background-image:-ms-linear-gradient(top, #ddd, white);
  background-image:-o-linear-gradient(top, #ddd, white);
  background-image:linear-gradient(top, #ddd, white);
  border-top:2px solid rgba(0,0,0,0.2);
  color:#900;
}

#rolling-nav a:hover {
  margin-top:-50px;
  margin-bottom:1px; 
}
    </style>
    <body>
<nav id="rolling-nav">
    <ul>
        <li><a href="#" data-clone="Início">Inicío</a></li>
        <li><a href="#" data-clone="Eleitores">Eleitores</a></li>
        <li><a href="#" data-clone="Chapa">Chapa</a></li>
        <li><a href="#" data-clone="Relatórios">Relatórios</a></li>
        <li><a href="#" data-clone="Adm">Adm</a></li>
       
    </ul>
</nav>

    
<input type="button" value="Logout" name="B1" onClick="confirma()">


<!--
confirmação para qualquer ação!! não se esqueça!
<a href="exclui.php?cod_registro=100" onclick="return confirm('Confirma exclusão do registro XPTO?')">Exclui registro</a>-->
</html>
