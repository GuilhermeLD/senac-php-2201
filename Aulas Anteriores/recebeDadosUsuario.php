<?php
/*
include n da erro fatalcaso nao encontre a pagina(nao essencial ex. html)
required da erro fatal, caso nao encontre a pagina(algo essencial para rodar o programa)
*/

include 'funcoes/funcoesAluno.php';

$matricula = $_POST['matricula'];
$aluno = $_POST['aluno'];

if(cadastraAluno(['matricula' => $matricula, 'nome' => $aluno])){
    echo "$aluno, você foi matriculado com sucesso.";
}else{
    echo "$aluno, alguma coisa deu errado.";
}

echo "<br><br><a href='dadosUsuario.php'><button>Cadastrar Outro</button></a>
        &nbsp&nbsp&nbsp&nbsp<a href='listarUsuarios.php'><button>Listar Alunos</button></a>";   