<?php

session_start();


switch(session_status()){ //Retorna o status da sessão
    case 0:
        echo "As sessões estão desabilitadas.<br>";
        print_r($_SESSION);
        break;
    case 1:
        echo "As sessões estão habilitadas, mas nenhuma existe.<br>";
        print_r($_SESSION);
        break;
    case 2:
        echo "As sessões estão habilitadas, e uma existe.<br>";
        print_r($_SESSION);
        break;
    default:
        echo "Não foi possível definir as sessões.";
}