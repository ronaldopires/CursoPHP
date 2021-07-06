<?php

session_start();

//Após verificar login e senha reinicie o id da sessão
session_destroy();
session_start();

session_regenerate_id();
echo session_id();
