<?php
/*
function cadastraAluno(array $nome):bool {


        echo "Aluno {$nome['nome']} cadastrado!";

        return false;
}

$aluno = [ 'nome' => 'Guilherme',
           'matricula' => '564355'];

if (cadastraAluno($aluno)){
        echo "<br>Minha função funcionou";
}
else {
        echo "<br>minha função Não funcionou";
}
*/

function cadastraAluno(array $aluno):bool {

        $f = fopen( 'alunos.csv', 'a');

        $escreveu = fwrite( $f, "{$aluno['matricula']}; \"{$aluno['nome']}\"\n");
        fclose($f);

        if($escreveu){
                return true;
        }else{
                return false;
        }
}

$funcionou = cadastraAluno(['matricula' => 65464, 'nome' => 'David']);

if ($funcionou){
        echo "<br>Aluno cadastrado com sucesso";
}
else {
        echo "<br>Aluno não cadastrado";
}

 //uma variavel dentro da função, só existe dentro da função
