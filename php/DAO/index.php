<?php 

	
	require_once("config.php");
	$sql = new Sql();
	$retorno = $sql->select("select * from tb_usuarios");
	//echo json_encode($retorno);
	$usuario = new Usuario();
	//$usuario->loadByID(1);
	//echo json_encode($usuario,JSON_PRETTY_PRINT);


	

	/* Pelo motivo de o metodo listarUsuario ser estatico eu posso chamar ele sem precisar instanciar um objeto */
	//$lista = Usuario::listarUsuarios();

	//echo json_encode($lista,JSON_PRETTY_PRINT);


	/*Chama o metodo pesquisa que é estatico*/
	//$retorno = Usuario::pesquisa("u");

	//echo json_encode($retorno);

	//echo $usuario->login("Jose","123456");


	/* envia os valor pra os setter's e depois chama o metoo insert para inserir no BD*/
	/*$usuario->setLogin("adriano");
	$usuario->setSenha("123456");
	$usuario->insert();*/


	/* imprime em formado de json por causa do metodo toString da classe Sql*/
	//echo $usuario;


	/* Seleciona o usuario de id 7 do BD */
	//$usuario->loadByID(5);

	/* altera o usuario informado acima.*/
	//$usuario->upDate("James Ryan","teste");

	//echo $usuario;



	/* */

	$usuario->loadByID(2);
	/* deleta o usuario cujo o id é informado no parametro */
	$usuario->delete();


	echo $usuario;



 ?>