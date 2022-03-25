<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//FIM Conecta no Banco de Dados

//Atualizar um registro

$updated = $bd->exec("UPDATE tarefas SET descricao = 'salve salve' WHERE id = 3");


//FIM Atualizar registro

if($updated){
    echo "registro alterado";

}else {
    echo "erro ao alterar o registro";
}