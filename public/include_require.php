
<?php
#include './teste.php';

#require './teste.php'; 

//UTILIZANDO INCLUDE E REQUIRE
////////////////////////////////////////


#include './nao_existo.php';

#echo "Continuei Executando seu código";

// TESTE DO INCLUDE
/////////////////////////////////////////


#require './nao_existo.php';

#echo "Continuei Executando seu código";

// TESTE DO REQUIRE

///////////////////////////////////////////

//TESTE INCLUDE_ONCE

//include_once './teste.php';

//include_once './teste.php';

//include_once './teste.php';

//include_once './teste.php';

//////////////////////////////////
//TESTE REQUIRE_ONCE COM ERROS

//require_once './nao_existo.php';

//require_once './nao_existo.php';

//////////////////////////////////

//TESTE REQUIRE_ONCE CHAMADA SEM ERROS

require_once './teste.php';

require_once './teste.php';
