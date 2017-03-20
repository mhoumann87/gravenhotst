<?php

DEFINE ('DB_USER', 'gh_admin');
DEFINE ('DB_PASS', 'kode1234');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'michael_h_dk');

$forbind = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) OR die('Kunne ikke oprette forbindelse til database '. mysqli_connect_error());

mysqli_set_charset($forbind, "utf8");

?>