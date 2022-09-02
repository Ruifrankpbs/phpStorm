## PHP STORM Projeto de Aprendizagem

Este projeto tem como objetivo documentar e registrar meu aprendizado em uma das linguagens de programação mais legais do mundo, PHP.

Apesar dos idiotas que colocam o JavaScript em um pódio que não pertence a nenhuma linguagem, e ainda dizem que a linguagem A ou B vai morrer, peço que vejam a sintaxe e o propósito do PHP e verão que podem gostar muito da linguagem.

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



# A base do PHP

A partir de agora iremos nos aprofundar nos fundamentos do PHP;

Gostaria de pontuar que sou apenas um estudante, não sou um especialista no assunto, pode ser que eu escreva alguma coisa que esteja errado, sinta-se a vontade para me corrigir, mas por favor, de forma construtiva, do contrário responderei à altura sua ofensa.

## Criando a pasta *public* no projeto

Iremos criar uma pasta *public* dentro da pasta do projeto para melhor organizar-lo;

Em seguida iremos colocar dentro dela o nosso arquivo **index.php**;

## Antigamente ...

Antigamente nós trabalhávamos com o PHP juntamente com o HTML, muitos projetos ainda são elaborados assim. Mas devido a novas arquiteturas e engenharia de sistemas, adotaram-se novas formas de se desenvolver projetos em PHP;

Criaremos um arquivo de testes, nomearemos ele de **teste.php** e colocaremos dentro da nossa pasta *public*;

<img src="img\organizacao_projeto.png">

Dentro do arquivo **teste.php** iremos exemplificar como o PHP trabalha em sinbiose com HTML, ou seja , o PHP trabalha incorporado dentro do HTML como veremos no código que acrescentaremos dentro desse arquivo de testes:

~~~~php+HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        <?php
        echo "Olá Mundão!!!"
        ?>
    </h2>

</body>

</html>
~~~~

Ao acessarmos esse arquivo no nosso navegador ( lembrando que devemos estar com nosso servidor PHP rodando) colocando o endereço local do arquivo PHP:

~~~~terminal
http://localhost:4000/teste.php
~~~~

Teremos o seguinte resultado no navegador:

<img src="img\result_teste.png">

Como podem ver que o resultado é somente um HTML, o PHP renderizou a frase "Olá Mundão!!!" dentro da tag html;

E se você não está acreditando que é realmente o PHP que está fazendo isso, podemos deixar a coisa mais interessante, adicionando uma variável com o nome *"variavelFrase"* e em seguida atribuir o valor dessa variável com uma frase e depois renderizar a frase na nossa página HTML;

Então nosso código no arquivo **teste.php** ficará assim:

~~~~php+HTML
<?php
$variavelFrase = "E assim nasce um código PHP!!"
?>//Variável PHP

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        <?php
        echo "Olá Mundão!!!"

        ?>
    </h2>
    <h3>
        <?php
        echo $variavelFrase
        ?>//Renderização ou impressão do valor da variável PHP no HTML
    </h3>

</body>

</html>
~~~~

E o resultada será o seguinte:

<img src="img\result_variavel_php.png">

## Agora ...

Agora com os novos padrões, não é tão interessante se trabalhar com o PHP misturado com o HTML;

Trabalharemos com apenas com arquivos contendo somente PHP, desse modo não precisamos mais fazer o fechamento do PHP;

Então o bloco PHP ficará assim:

~~~~php
<?php
    echo "Olá Mundo"
~~~~



Note que não tem mais o **"?>"** para fechar o bloco PHP, simplesmente porque não haverá mais HTML misturado com o PHP, sendo assim você não precisa mais informar ao processador do PHP quando termina o bloco de código PHP.

# FUNDAMENTOS PHP

## Include e Require

Agora aprenderemos sobre o *Include* e o *Require*;

Criaremos um novo arquivo com o nome **include_require.php** dentro da nossa pasta *public*;

E se eu quiser chamar um arquivo PHP dentro de outro arquivo PHP?;

Lembra do nosso arquivo **teste.php**? que tal chamar ele para dentro do nosso novo arquivo **include_require.php**?;

Para fazer isso basta fazer a seguinte codificação dentro de **include_require.php**:

~~~~php
<?php
    include './teste.php';

~~~~

E se você acessar o nosso arquivo **include_require.php** através do nosso servidor local:

~~~~terminal
http://localhost:4000/include_require.php
~~~~

Verá que todo o conteúdo que está dentro de **teste.php** está aparecendo dentro de **include_require.php**;

Veja o resultado:

<img src="img\include.png">

O **Require** funciona da mesma forma, vamos adicionar nosso arquivo **include_require.php**, que ficará assim:

~~~~~php
<?php
include './teste.php';

require './teste.php';
~~~~~

E o resultado será esse:

<img src="img\require_include_result.png">

Veja que está fazendo a chamada do conteúdo de **teste.php** duas vezes no arquivo **include_require.php**, por isso que o conteúdo está aparecendo duas vezes.

Legal! Mas qual a diferença do **include** para o **require**?

Em resumo, o **include** , caso haja algum erro no código, ele exibe a mensagem de erro , porém continua executando o resto do código.

Como exemplo iremos alterar nosso código e colocar um erro de propósito, então nosso arquivo **include_require.php** ficará assim:

~~~~php
<?php
include './nao_existo.php';

echo "Continuei Executando seu código";
~~~~

E o resultado no navegador é:

<img src="img\include_result_test.png">

Note que o primeiro **include** que está com o arquivo *nao_existo.php* aparece como erro, pois não existe, mas o segundo **include** continuou executando sem problemas.

Já o **require** isso não acontece, se tiver um erro no código, ele para por ali mesmo;

Vamos alterar nosso arquivo **include_require.php** que ficará assim:

~~~~php
<?php
	require './nao_existo.php';

	echo "Continuei Executando seu código";
~~~~

E o resultado no navegador:

<img src="img\require_result_test.png">

E veja que ele não continuou executando nosso código.



## Utilizando o "ONCE"

Once do inglês para o português, significa "uma vez", logo significa que utilizando essa opções com o **include**  e o **require** significa que ele irá fazer a chamada somente uma vez;

Se você utilizar o **include** e o **require** sem o *ONCE* , será feito a chamada quantas vezes você repetir o comando;

Como exemplo dessa situação podemos alterar mais uma vez nosso arquivo **include_require.php** para ficar dessa forma:

~~~~php
<?php
	include './teste.php';

	include './teste.php';

	include './teste.php';

	include './teste.php';

	include './teste.php';
~~~~

Dessa forma será repetido quantas vezes eu repetir a chamada do **include**;

Como podemos ver o resultado no navegador:

<img src="img\repete_include_test.png">

Mas quando utilizamos **ONCE** a chamada do **include** acontece somente UMA VEZ, não importa quantas vezes você faça a chamada;

Para verificarmos isso , alteraremos o nosso arquivo **include_require.php** para:

~~~~php
<?php
    include_once './teste.php';

    include_once './teste.php';

    include_once './teste.php';
~~~~

E o resultado no nosso navegador será:

<img src= "img\include_once_test.png">

O mesmo acontece com os erros que vierem ocorrer na chamada do **require**, se acrescentarmos o *ONCE* a descrição do erro aparecerá somente uma vez;

Para testar esse comportamento iremos alterar novamente o arquivo **include_require.php**:

~~~~php
<?php
    require_once './nao_existo.php';

    require_once './nao_existo.php';

    require_once './nao_existo.php';
~~~~

E como resultado no navegador teremos:

<img src="img\require_once.png">

Se a chamada do **require** tiver correta, e não ocorrer nenhum erro, assim como no **include_once** a chamada será feita somente uma vez no **require_onde**;

Nosso código do arquivo **include_require.php** ficará assim:

~~~~php
<?php
    require_once './teste.php';

    require_once './teste.php';
~~~~

No navegador podemos ver o resultado:

<img src="img\require_once_no_error.png">

# VARIÁVEIS E SEUS TIPOS

Vamos aprender sobre variáveis e seus tipos no PHP;

Iremos começar com STRING.

O que é uma string? Em termos técnicos é uma cadeia de caracteres ou textos.

No PHP, tudo que é colocado entre ( "" ) ou ( '' ) será considerado uma string/texto;

Para ajudar no nosso entendimento desse assunto iremos criar um arquivo chamado "variável.php", dentro da pasta public do nosso projeto;

Onde iremos inserir o seguinte código:

~~~php
<?php
//Tipos de Variáveis no PHP

//string -- É um conjunto de caracteres, colocados sempres dentro de aspas simples ou duplas;
echo gettype("mfsdfmsdflm34mlsdmfslm");

//numbers --integers --float(double)

//booleans

//arrays

//object

//null
~~~

Note que no primeiro tipo que estamos estudamos eu adicionei o comando "acho gettype( )";

Esse comando irá fazer com que seja exibido o tipo do conteúdo que estiver dentro dos parênteses;

O resultado será o seguinte no navegador

<img src="img\string.png">