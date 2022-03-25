

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <?php
    include 'insert.php';
    ?>
</head>
<body>
    <form action="WelcomeNome.php" method="post">
        <p>digite seu nome, por favor</p>
        <input type="text" name="nome" placeholder="José Silva">
            <br><br>
        <input type="submit" value="Enviar">


    </form>
</body>
</html>

