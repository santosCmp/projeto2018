<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

// json_encode converte um objeto PHP para uma string JSON
echo json_encode($usuarios);


 ?>