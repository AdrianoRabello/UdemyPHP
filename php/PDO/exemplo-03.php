<?php 

	/* 
		faz uma instancia da conexão com PDO passando o nome do banco de dados, nome do host, usuario, senha
	*/

	/*
		a ordem dos parametros na conexão com PDO não importa.
	*/

	$con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	/*
		cria doi parametros para serem recebidos nos campos values. Importante ressaltar que o nome dos parametros é case sensitive	
	*/
	$stmt = $con->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$id = 2;
	$login = "user";
	$password = "testando";
	/*
		seta para o objeto stmt o valor da variavel logim para o parametro do values do comando prepare
	*/
	$stmt->bindParam(":LOGIN",$login);
	$stmt->bindParam(":PASSWORD",$password);
	$stmt->bindParam(":ID",$id);
	/* 
		executa o SQl do prepare 
	*/
	$stmt->execute();
	

	
	


 ?>