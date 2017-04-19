<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASS', 'ja180570');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'gravenhorst');

$forbind = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) OR die('Kunne ikke oprette forbindelse til database '. mysqli_connect_error());

mysqli_set_charset($forbind, "utf8");

?>