
<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//FIM Conecta no Banco de Dados

$tarefa = $_POST['tarefa'];//dado inseguro

$stmt = $bd->prepare('INSERT INTO tarefas 
                         (descricao) 
                        VALUES 
                        (:tarefa)');//aqui em "valido" o dado, o BD vai receber como uma string


$stmt->bindParam(':tarefa', $tarefa);

//INSERT de forma segura.
$inseriu = $stmt->execute();
//FIM INSERT


if( $inseriu ){
    echo "Valeu, adorei essa tarefa!";
}else{
    echo "Ai meu Deus, não gravou!";
}


/*
//DELETE 
$apagou = $bd->exec('   DELETE FROM 
                            tarefas 
                        WHERE 
                            id = 13');
//FIM DELETE

if( $apagou ){
    echo "APAGOU!";
}else{
    echo "Ai meu Deus, não apagou!";
}
*/