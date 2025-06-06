<?php 
    /* Vamos simular uma mensagem de erro.
    Se a variável erro tiver conteúdo dentro dela, deverá ser
    apresentado mensagem de erro.
    Caso contrário, se a mensagem de erro estiver vazia, deverá aparecer a mensagem 'SUCESSO'*/

    $mensagem_erro = '';

    $css;
    $mensagem;
    if (!empty($mensagem_erro)){
        $css = 'erro';
        $mensagem = $mensagem_erro;
    } else {
        $css = 'sucesso';
        $mensagem = 'SUCESSO';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 6</title>
        <style>
            body {
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .sucesso {
                color: white;
                background-color: darkgreen;
            }

            .erro {
                color: white;
                background-color: darkred;
            }

            div {
                width: 100px;
                height: 100px;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                border-radius: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="<?=$css?>"><?=$mensagem?></div>
    </body>
</html>