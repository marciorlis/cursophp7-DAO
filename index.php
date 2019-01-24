<?php

require_once("config.php");

// carrega um usuario
/*
$root = new Usuario();
$root->loadbyId(4);
echo $root;
*/

/*
echo "<hr>";
$lista = Usuario::getList();
echo json_encode($lista);
*/

// carrega lista de usuarios buscvando pelo login
/*
$search = Usuario::search("jo");
echo json_encode($search);
*/

//carrega um usuario usando o login e a senha
/*
$usuario = new Usuario();
$usuario->login("jose","12345678");
echo $usuario;
*/

//CRIANDO UM USUARIO NOVO
/*
$aluno = new Usuario("rtnaoaluno", "@lun0");
$aluno->insert();
echo $aluno;
*/

// Alterar um usuario
/**/
$usuario = new Usuario();
$usuario->loadbyId(10);
$usuario->update("Eduardo","&&24&&");
echo $usuario;


//Apagar um usuario
/*
$usuario = new Usuario();
$usuario->loadbyId(9);
$usuario->delete();
echo $usuario;
*/


/*

echo "<hr>";
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/
?>
