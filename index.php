<?php 

require_once("config.php");
// carrega um usuario
//$root = new Usuario();
//$root->loadByid(2);


// vantagem de um metodo static e que não precisa instancia apenas 
// chamar pelo ::metodo();

//lista todos os usuarios do banco 




// Quando da um echo na instância, automaticamente ela é convertida
// string e o método mágico é executado.


//$login = new Usuario();
//$login->login("Gabriel","211236");
//echo $login;

$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();

echo $aluno;
 ?>