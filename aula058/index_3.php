<?php 
/*
    A função error_log() permite escrever o que quisermos no registro de logs de filesystem do PHP.

    O PHP tem normalmente ativo o sistema de registro de logs. Se quiseres perceber onde esse registro se encontra, podemos executar o phpinfo() e procurar a propriedade error_log
*/

phpinfo();

// O PHP vai escreveno eventos de erro nesse ficheiro. Se quiseres escrever o teu próprio registro, podes fazê-lo

error_log('Aconteceu um errinho :PPPP');

/*
Tradicionalmente, no desenvolvimento de aplicações vais querer usar um pacte externo que segue as normas para o registro de logs. Um dos mais conhecidos é o monolog. Iremos no módulo mais avançado ver como adicionar este pacote ao nosso sistema com o composer e como podemos usá-lo nos nossos projetos.

Existem outras funções que permitem configurar erros. Por agora ficamos com as fundamentais.

O importante agora é perceber como é que podemos controlar os erros e evitar que nossa aplicação termine por causa de um erro
*/
?>
