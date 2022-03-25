<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//FIM Conecta no Banco de Dados

$stmt = $bd->query("SELECT id, descricao FROM tarefas");

$stmt->execute();

echo "<table border='1'>
    <thead>
        <th>ID</th>
        <th>Descrição</th>
    </thead>
    <tbody>
    ";

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    echo '<tr>';   
    echo "<td>{$registro['id']} </td>"; 
    echo "<td>{$registro['descricao']} </td>"; 
    echo '</tr>';
    echo '<tr>';
}
     echo "</tbody>";
   echo "</table>";