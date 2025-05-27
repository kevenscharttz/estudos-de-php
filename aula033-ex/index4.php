<?php
/* 
    Dada a coleção de nomes, devem ser todos apresentado, mas a apartir de maria (inclusive), devem ser com texto vermelho
    */

$nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];
$css = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>

<body>
    <?php foreach ($nomes as $nome): ?>
        <?php if ($nome == 'maria') $css = 'vermelho' ?>
        <h3 class="<?= $css ?>"><?= $nome ?></h3>
    <?php endforeach; ?>
</body>

</html>