<?php

session_start();
include_once '../../classes/chapa/Chapa.php';
include_once '../../classes/chapa/ChapaDAO.php';

$path = '../../upload/';
            
$foto = $_FILES['imagem_chapa']['name'];
	
$foto = str_replace(" ", "_", $foto);
$foto = str_replace("ã", "a", $foto);
$foto = str_replace("á", "a", $foto);
$foto = str_replace("à", "a", $foto);
$foto = str_replace("é", "e", $foto);
$foto = str_replace("ê", "e", $foto);
$foto = str_replace("è", "e", $foto);
$foto = str_replace("í", "i", $foto);
$foto = str_replace("ì", "i", $foto);
$foto = str_replace("ó", "o", $foto);
$foto = str_replace("õ", "o", $foto);
$foto = str_replace("ç", "c", $foto);

$foto = strtolower($foto);

if(!in_array('image', explode('/', $_FILES['imagem_chapa']['type']))){
	
	echo "arquivo invalido";
	
}else{
	
	if(file_exists($path.$foto)){
		$a = 1;
		while(file_exists($path.'['.$a.']'.$foto)){
			$a++;
		}
		
		$foto = "[".$a."]".$foto;
		
	}
	
	if(!move_uploaded_file($_FILES['imagem_chapa']['tmp_name'], $path.$foto)){
		
		//se moveu o arquivo


		
	}

}
//variavel $foto salvar no banco de dados

$objChapa = new Chapa($_SESSION['id'], $_POST['nome_chapa'], $foto);

$ok = ChapaDAO::CadChapa($objChapa);
if ($ok == true) {
    echo "ok";
} else {
    echo "not";
}

