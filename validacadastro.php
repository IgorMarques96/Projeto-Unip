<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
$periodo	= $_POST ['periodo'];	//atribui��o do campo "periodo" vindo do formul�rio para variavel	
$curso	= $_POST ['curso'];	//atribui��o do campo "curso" vindo do formul�rio para variavel
$turma	= $_POST ['turma'];	//atribui��o do campo "turma" vindo do formul�rio para variavel
$semestre	= $_POST ['semestre'];	//atribui��o do campo "semestre" vindo do formul�rio para variavel
$numerosala	= $_POST ['numerosala'];	//atribui��o do campo "numerosala" vindo do formul�rio para variavel
$bloco	= $_POST ['bloco'];	//atribui��o do campo "bloco" vindo do formul�rio para variavel
$andar = $_POST ['andar'];	//atribui��o do campo "andar" vindo do formul�rio para variavel 

//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysqli_connect("localhost","root");
if (!$conexao)
	die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysqli_error());
//conectando com a tabela do banco de dados
$banco = mysqli_select_db("cadastro",$conexao);
if (!$banco)
	die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());

if ($periodo == "Matutino") {
	$query = "INSERT INTO cursosmanha (curso, turma, semestre1, salas, bloco, andar) VALUES ('".$curso."', '".$turma."', '".$semestre."', '".$numerosala."', '".$bloco."', '".$andar."')";

	mysqli_query($conexao,$query);

	echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a aten��o.";
}
if ($periodo == "Noturno") {
		$query = "INSERT INTO cursos_noturno (curso, turma, semestre1, salas, bloco, andar) VALUES ('".$curso."', '".$turma."', '".$semestre."', '".$numerosala."', '".$bloco."', '".$andar."')";


	mysqli_query($conexao,$query);

	echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a aten��o.";	
}


?> 
</body>
</html>
