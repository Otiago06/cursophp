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
        $total = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" min="5" step="5" value="<?=$total?>" required>
            <small>*Notas disponíveis: R$ 100,R$ 50, R$10 e R$5</small>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
        $n100 = (int)($total / 100);
        $sobra = ($total % 100);

        $n50 = (int)($sobra / 50);
        $sobra = ($sobra % 50);

        $n10 = (int)($sobra / 10);
        $sobra = ($sobra % 10);

        $n5 = (int)($sobra / 5);
    ?>
    <section>
        <h2>Saque de R$ <?=number_format($total, 0, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="100-reais.jpg" height="100" alt="R$ 100"> x<?=$n100?></li>
            <li><img src="50-reais.jpg" height="100" alt="R$ 100">  x<?=$n50?></li>
            <li><img src="10-reais.jpg" height="100" alt="R$ 100">  x<?=$n10?></li>
            <li><img src="5-reais.jpg" height="100" alt="R$ 100">  x<?=$n5?></li>
        </ul>
    </section>
</body>
</html>
<!--
    alt+shift cópia o codigo selecionado