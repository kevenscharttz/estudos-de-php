<?php 
echo '<pre>';

/*
Uma das formas mais diretas de criar e escrever informação num ficheiro é recorrendo à função file_put_contents()
*/

// Se o ficheiro não existe, é criado.
// O conteúdo vai ser esmagado.

file_put_contents('file1.txt', 'texto do ficheiro');

//Se pretendemos adicionar informação ao mesmo ficheiro, usamos o terceiro argumento.

file_put_contents('file2.txt', time() . PHP_EOL, FILE_APPEND);
echo 'terminando';
?>