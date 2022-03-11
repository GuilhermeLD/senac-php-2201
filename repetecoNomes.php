<?php

$nome = $_POST['nome'];
$numero = $_POST['numero'];

for($i = 0 ; $i < $numero ; $i++){
        
    echo "$nome<br>";

    if($i > 1000)break;

};

function salvarNome(array $nome) {

    $f = fopen( 'nomes.csv', 'a');

    $escreveu = fwrite( $f, "{$nome['nome']}\r\n");
    fclose($f);

    if($escreveu){
        return true;
}else{
        return false;
}
};

$funcionou = salvarNome(['nome' => $nome]);

if ($funcionou){
    echo "<br>Nome apareceu " . $numero . " vezes!";
}
else {
        echo "<br>Opa, algo deu errado!";
}


