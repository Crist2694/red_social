<?php

session_start();
session_unset();
session_destroy();

echo "se cerro sesion correctamente";
header('location: index.html');

?>