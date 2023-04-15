<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "php \u{1F418}";
        echo 'php \u{1F418}';

        echo "<hr>";

        $nome = "Gustavo";
        echo "Olá $nome!";
        echo 'Olá $nome';

        echo "<hr>";

        const ESTADO = "RJ";
        echo "Moro no ESTADO";
        echo 'Moro no ESTADO';

        echo "Moro no ".ESTADO;

        echo "<hr>";

        echo "\u{1F499}";

        echo "<hr>";
        //heredoc
        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< TESTE
            Olá galera do canal $canal!
            tudo bem com vocês?
            Como esta sendo esse ano de $ano?
            Abraços! \u{1F596}
        TESTE;
        echo "<hr>";
        //nowdoc
        $canal = "Curso em Vídeo";
        $ano = date('Y');

        echo <<< 'FRASE'
            Olá galera do canal $canal!
            tudo bem com vocês?
            Como esta sendo esse ano de $ano?
            Abraços! \u{1F596}
        FRASE;

    ?>
</body>
</html>