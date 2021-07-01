<?php

require_once("config.php");

$user = new Usuario();

//Exibe um único resultado
//$user->loadById(5);
//echo $user;

//Exibe uma lista de dados
//echo $user->getLista(); //Não precisa instanciar pois o metodo é estático podendo acessar pela Classe::método()
//$lista = Usuario::search("m"); //busca pelo nome 
//$lista = $user->getLista();
//$user->login("Ronaldo", "123"); //busca pelo nome 
//echo $user;
//$aluno = new Usuario("Lica", "12315");
//$aluno->setUserLogin("aluno");
//$aluno->setSenha("@lun0");
//$aluno->insert();
//echo $aluno;
$usuario = new Usuario();
//$usuario->loadById(10);
//$usuario->update("professor", "123");

$usuario->delete(11);

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/