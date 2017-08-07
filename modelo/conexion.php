<?php
$link=mysqli_connect("localhost","root","mysql");
mysqli_select_db($link, "tienda") OR DIE (
"Error: No es posible establecer la conexión");
$mysqli_set_charset = mysqli_set_charset($link,"utf8");