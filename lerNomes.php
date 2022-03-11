<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler nomes</title>
</head>
<body>
    <h3>Nomes cadastrados até agora no Banco de dados.</h3>

    <?php
    function lerNomes(){

        $nomes =[];
        
        $f = fopen( 'nomes.csv', 'r');
        while($linha = fgets($f)){
                echo ($linha . "<br>");
        }
        
    
    };
    
    lerNomes(); 
    ?>


</body>
</html>