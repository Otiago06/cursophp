<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $total = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" value="<?=$total?>" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php
        $sobra = $total;
        // Total de Semanas
        $semanas = (int)($sobra / 604_800);
        $sobra = ($sobra % 604_800);
        // Total de Dias
        $dias = (int)($sobra / 86_400);
        $sobra = ($sobra % 86_400);
        // Total de Horas
        $horas = (int)($sobra / 3_600);
        $sobra = ($sobra % 3_600);
        // Total de Minutos
        $minutos = (int)($sobra / 60);
        $sobra = ($sobra % 60);
        // Total de Segundos
        $segundos = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>
<!--
    alt+shift cópia o codigo selecionado
    7 dias (x24), 168 horas (x60), 10.080 (x60) = 604.800 seg
    24 horas (x60), 1440 min (x60) = 86.400 seg
    60 min (x60) = 3600 seg
    60 seg
-->
