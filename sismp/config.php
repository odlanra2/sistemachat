<?php
# Sistema de mensajeria privada By marcofbb.com.ar

$dbhost = "localhost"; // Servidor
$dbuser = "root"; // Nombre de Usuario
$dbbase = "sql"; // Nombre de la base de datos
$dbpass = ""; // Contrase�a

# Conectamos a la base de datos
$link = mysql_connect($dbhost,$dbuser,$dbpass);
		mysql_select_db($dbbase,$link);
?>