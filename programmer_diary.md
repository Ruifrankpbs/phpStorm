## PHP STORM Projeto de Aprendizagem

Este projeto tem como objetivo documentar e registrar meu aprendizado em uma das linguagens de programação mais legais do mundo, PHP.

Apesar dos idiotas que colocam o JavaScript em um pódio que não pertence a nenhuma linguagem, e ainda dizem que a linguagem A ou B vai morrer, peço que vejam a sintaxe e o propósito do PHP e verão que devem gosto muito da língua.

Primeiro, vamos configurar o ambiente de desenvolvimento em PHP;

## INSTALANDO O PHP

Você pode baixar o PHP no site Oficial:

https://www.php.net/downloads.php

Não sou especialista, mas aconselho você a baixar a versão LTS mais recente e uma anterior. Nesse caso, faremos o download da versão 8 e da versão 7.

### Configurando

Não levarei crédito pela fonte que encontrei que ensina como configurar duas versões do PHP no Windows. Por este motivo, irei apenas referir o site para que possam acessar e verificar o trabalho da  Hcode Treinamentos.

https://hcode.com.br/blog/como-executar-duas-versoes-do-php-no-windows-10

Basta seguir o guia passo a passo deles e você terá ambas as versões configuradas em seu computador.

# CRIANDO O PROJETO

Após instalar o PHP, basta criar uma pasta com o nome do seu projeto em algum lugar do seu computador.

<img src="img\creating_project_php.png">

Em seguida, iremos criar um arquivo *PHP* e adicionar **phpinfo()** no corpo do arquivo PHP. Nosso arquivo **index.php** ficará assim:

~~~~php
<?php
echo "Olá Mundo";
echo phpinfo();

~~~~



Em seguida abriremos o terminal na pasta do projeto e daremos o seguinte comando:

~~~~terminal
php -S localhost:80
~~~~

E depois abriremos um outro terminal dentro da pasta do projeto e daremos o comando:

~~~~php
php7 -S localhost:81
~~~~

Esses comandos iniciarão servidores PHP em portas diferentes.

Se você realizou a instalação e configuração do PHP corretamente, terá o seguinte resultado nas duas janelas do terminal:

<img src="img\version7_version8_php.png">

Isso significa que estamos utilizando as duas versões do PHP no nosso computador. E para acessar nosso arquivo *php* **index.php** com a versão 8, basta abrir seu navegador e digitar o seguinte endereço:

http://localhost:80

E teremos o seguinte resultado:

<img src="img\localhost_80.png">

E para acessar nosso arquivo *php* **index.php** com a versão 7, basta abrir seu navegador e digitar o seguinte endereço:

http://localhost:81

E teremos o seguinte resultado:

<img src="img\localhost_81.png">