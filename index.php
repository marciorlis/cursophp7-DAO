<?php

require_once("config.php");
// carrega um usuario
/*
$root = new Usuario();
$root->loadbyId(4);
echo $root;
*/

// carrega lisa de usuarios buscvando pelo login
/*
$search = Usuario::search("jo");
echo json_encode($search);
*/

//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose","12345678");
echo $usuario;

/*
echo "<hr>";
$lista = Usuario::getList();
echo json_encode($lista);
*/


/*

echo "<hr>";
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/
?>
