<?php

//comentário de linha

/*
Comentário de bloco
*/
/*  
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



$usuario['nome'] = 'Luiz';
$usuario['senha'] = '123';

*/
/*

$usuario[0] = ['nome' => 'Luiz', 'senha' => '123'];
$usuario[1] = ['nome' => 'fer', 'senha' => '321'];
$usuario[2] = ['nome' => 'bono', 'senha' => '541'];

echo '<table border="1">';  

echo '<thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
      </tr>';
echo '</thead>';

foreach( $usuario as $id => $valor) {//looping com vetores e criação de tabelas
       
    echo '<tr>';
    echo "<td>$id</td>";    
    echo "<td>{$valor['nome']} </td>"; 
    echo "<td>{$valor['senha']} </td>"; 
    echo '</tr>';
    echo '<tr>';
}
echo '</table>';  

/*  

//crie uma variável para receber o código da tabela
   $tabela = '<table border="1">';//abre table
   $tabela .='<thead>';//abre cabeçalho
   $tabela .= '<tr>';//abre uma linha
   $tabela .= '<th>Nome</th>'; // colunas do cabeçalho
   $tabela .= '<th>Senha</th>';
   $tabela .= '</tr>';//fecha linha
   $tabela .='</thead>'; //fecha cabeçalho
   $tabela .='<tbody>';//abre corpo da tabela
 
    echo "índice $id nome: {$valor['nome']} senha: {$valor['senha']}<br>"; 

   $tabela .= '<tr>'; // abre uma linha
   $tabela .= '<td></td>'; // coluna Alvara
   $tabela .= '<td>'.$exibe['nome'].'</td>'; //coluna numero
   $tabela .= '<td>'.$exibe['senha'].'</td>'; // coluna validade
   $tabela .= '<td></td>'; //coluna anexo
   $tabela .= '<td></td>';//coluna valor numero
   $tabela .= '<td></td>'; // coluna data
   $tabela .= '</tr>'; // fecha linha
   /*loop deve terminar aqui
   $tabela .='</tbody>'; //fecha corpo
   $tabela .= '</table>';//fecha tabela

   echo $tabela;



/* echo $var;

var_dump($var); 

phpinfo(); informações importante, como variáveis de ambientes

*/



$dias = [   'Dom' => ['Domingo', 'Domingo'],
            'Seg' => ['Segunda' , 'Segunda-feira'],
            'Ter' => ['Terça', 'Terça-feira'],
            'Qua' => ['Quarta', 'Quarta-feira'],
            'Qui' => ['Quinta', 'Quinta-feira'],
            'Sex' => ['Sexta', 'Sexta-feira'],
            'Sab' => ['Sábado','Sábado']];

foreach( $dias as $dia => [$nome , $nomeCompleto]) {
    echo "$dia: $nome > $nomeCompleto <br> ";
}   
/*
$jogos = [  'Cod' => 'Call of duty',
            'Fifa' => 'FIFA 21',
            'Lol' => 'League of legends',
            'Vava' => 'Valorant',
            'CSGO' => 'Counter Strike Go Ofensive',
            'GOW' => 'God of War'
];
    
foreach ($jogos as $abreviacao => $nomeCompleto){
    echo "$abreviacao: $nomeCompleto<br>";
}
*/