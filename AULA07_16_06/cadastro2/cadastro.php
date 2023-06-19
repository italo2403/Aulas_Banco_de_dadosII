<?php

	include("conexao.php");
	
	$nome=$_POST['nome'];
	// $sobrenome=$_POST['sobrenome'];
	// $email=$_POST['email'];
	// $senha=$_POST['senha'];
	$questao1=$_POST['questao1'];
	$questao2=$_POST['questao2'];
	$questao3=$_POST['questao3'];
	$questao4=$_POST['questao4'];
	$questao5=$_POST['questao5'];
	$questao6=$_POST['questao6'];
	$questao7=$_POST['questao7'];
	$questao8=$_POST['questao8'];
	$questao9=$_POST['questao9'];
	$questao10=$_POST['questao10'];
	$questao11=$_POST['questao11'];
	$questao12=$_POST['questao12'];
	$questao13=$_POST['questao13'];
	$questao14=$_POST['questao14'];
	$questao15=$_POST['questao15'];
	$questao16=$_POST['questao16'];
	$questao17=$_POST['questao17'];
	$questao18=$_POST['questao18'];
	$questao19=$_POST['questao19'];
	$questao20=$_POST['questao20'];
	$questao21=$_POST['questao21'];

	

	$sql="INSERT INTO prova(nome, questao1, questao2, questao3, questao4, questao5, questao6, questao7, questao8, questao9, questao10, questao11, questao12, questao13, questao14, questao15, questao16, questao17, questao18, questao19, questao20, questao21)
	VALUES ('$nome', '$questao1', '$questao2', '$questao3', '$questao4', '$questao5', '$questao6', '$questao7', '$questao8', '$questao9', '$questao10', '$questao11', '$questao12', '$questao13', '$questao14', '$questao15', '$questao16', '$questao17', '$questao18', '$questao19', '$questao20', '$questao21')";
	if(mysqli_query($conexao, $sql)){
		header("Location: fim.php");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>