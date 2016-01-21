<?php
	$enlace = mysql_connect('localhost', 'root', '');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
?>