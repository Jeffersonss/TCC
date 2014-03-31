<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../template1/css/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
  
<?php
include_once '../classes/Eleitor.php';
            include_once '../Classes/EleitorDAO.php';

            
            $objEleitor = new Eleitor();
            $objEleitor->setNome($_POST['nome']);
                  

           
                $ok = EleitorDAO::PesquisarEleitor($objEleitor);
            if ($ok == true) {
                echo "<center><table id='Tabela'>";
				echo "<div id='page-heading'><h1>PESQUISA DE ELEITOR</h1></div>"."</br></br>";
                echo"<tbody>";
                echo "<tr><th>NOME &nbsp;&nbsp; </th> ";
                echo "<th>RG &nbsp; </th>";
                echo "<th>CPF &nbsp; </th>";
                echo "<th>EMPRESA &nbsp; </th>";
                echo"</tr>";
                foreach ($ok as $dados){
                    
                    echo "<tr><td>". $dados ['nome']."</td>";
                    echo"<td> ". $dados ['rg']."</td>";
                    echo"<td>" . $dados ['cpf']."</td>";
                    echo"<td>" . $dados ['empresa']."</td>";?>
                    <td><a href="../Formularios/FormularioAlterarCliente.php?id=<?php echo $dados['id'];?>"</a><img src="../template1/images/forms/editar.PNG" width="30" height="30"/> &nbsp;
                                      <a href="../Formularios/FormularioExcluirCliente.php?id=<?php echo $dados['id'];?>"</a><img src="../template1/images/forms/excluir.PNG" width="30" height="30"/> </td>
                        </tr>;
                         }
				
				<?php
			}
                    echo"</tbody>";
	            echo "</table></center>";
              
            } else {
                echo "<br><br><br><br><br><br><center><img src='../template1/images/shared/Errado.png' target='centro'/></center>";
            }
?>
</body>
</html>