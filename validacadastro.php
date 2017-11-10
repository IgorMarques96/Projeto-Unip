<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$periodo	= $_POST ['periodo'];	//atribuição do campo "periodo" vindo do formulário para variavel	
$curso	= $_POST ['curso'];	//atribuição do campo "curso" vindo do formulário para variavel
$turma	= $_POST ['turma'];	//atribuição do campo "turma" vindo do formulário para variavel
$semestre	= $_POST ['semestre'];	//atribuição do campo "semestre" vindo do formulário para variavel
$numerosala	= $_POST ['numerosala'];	//atribuição do campo "numerosala" vindo do formulário para variavel
$bloco	= $_POST ['bloco'];	//atribuição do campo "bloco" vindo do formulário para variavel
$andar = $_POST ['andar'];	//atribuição do campo "andar" vindo do formulário para variavel 

//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysqli_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error());
//conectando com a tabela do banco de dados
$banco = mysqli_select_db("cadastro",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());

if ($periodo == "Matutino") {
	$query = "INSERT INTO cursosmanha (curso, turma, semestre1, salas, bloco, andar) VALUES ('".$curso."', '".$turma."', '".$semestre."', '".$numerosala."', '".$bloco."', '".$andar."')";

	mysqli_query($conexao,$query);

	echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
}
if ($periodo == "Noturno") {
		$query = "INSERT INTO cursos_noturno (curso, turma, semestre1, salas, bloco, andar) VALUES ('".$curso."', '".$turma."', '".$semestre."', '".$numerosala."', '".$bloco."', '".$andar."')";


	mysqli_query($conexao,$query);

	echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";	
}


?> 
</body>
</html>
