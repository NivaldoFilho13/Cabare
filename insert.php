<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="cabare";
	%com = new mysql ($cabare,$nome,$email,$ist,$sexo,$genero);
	
if ($conn -> connect_error){die("falha de conexão".$connect_error);}
	
	$nome=$post['nome']
	$email=$post['email']
	$ist=$post['ist']
	$sexo=$post['sexo']
	$genero=$post['genero']

$sql="insert into form_data (nome,email,ist,sexo,genero) 
values ($nome, $email, $ist, $sexo, $genero)";

if ($com -> query($sql)===true){echo"dados inseridos com sucesso";}
else {echo"erro".$sql."<br>". com->error;}

    $com -> close();
?>	
