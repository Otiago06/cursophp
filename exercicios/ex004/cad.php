<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //var_dump($_REQUEST); // $_GET, $_POST, $_COOKIES
            $nome = $_GET["nome"] ?? "Não informado";
            $snome = $_GET["sobrenome"] ?? "Não informado";

            echo "<p>É um prazer te conhecer, <strong>$nome $snome</strong>! Este é meu site.</p>";

            //echo 50/2+3**2;
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
        <!--ctrl+shift+p > abbre > P + enter-->
    </main>
</body>
</html>