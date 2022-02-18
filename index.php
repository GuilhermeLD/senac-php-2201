<?php

//comentário de linha

/*
Comentário de bloco
*/

define('XPTO', 'Valor sempre igual');

$var = "Olá Mundo";

echo XPTO;


$num = 2;

$var = '<br>' . "olá mundo! $num"; //o ponto é o perador de concatenação

echo $var;

echo '<br><br><h1>vamos tomar café</h1>';  


$domingo = 'Domingo';
$segunda = 'Segunda-feira';
$terca   = 'Terça-feira';
$quarta  = 'Quarta-feira';
$quinta  = 'Quinta-feira';
$sexta   = 'Sexta-feira';
$sabado  = 'Sábado';

$diaSemana = [  'dom' => 'Domingo',
                2 => 'Segunda-feira',
                3 => 'Terça-feira',
                4 => 'Quarta-feira',
                'qui' => 'Quinta-feira',
                6 => 'Sexta-Feira',
                'Sab' => 'Sábado'];


echo '<br>Hoje é ' . $diaSemana['Sab']; //exemplo sem interpolação

echo "<br>Hoje é {$diaSemana['dom']}";  //exemplo com interpolação

echo "<br>Hoje é {$diaSemana[3]}";  


/*
$usuario['nome'] = 'Luiz';
$usuario['senha'] = '123';

*/

$usuario[0] = ['nome' => 'Luiz', 'senha' => '123'];
$usuario[1] = ['nome' => 'fer', 'senha' => '321'];
$usuario[2] = ['nome' => 'bono', 'senha' => '541'];

echo "<pre>\n\n";

var_dump($usuario);



/* echo $var;

var_dump($var); 

phpinfo(); informações importante, como variáveis de ambientes

*/