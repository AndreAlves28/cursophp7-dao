<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(6);
//echo $root;

//Carrega uma lista de usuário
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("josé", "12345");
//echo $usuario

//Criando um novo usuário
//$aluno = new Usuario("aluno", "@aaa");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("professor", "34343");

?>