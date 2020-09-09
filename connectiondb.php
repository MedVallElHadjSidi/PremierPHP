<?php 

$serveur="localhost";
$login="root";
$pwd="";
$bd="esp";
$connect=@mysql_connect($serveur,$login,$pwd)or die('erreur de connection');
mysql_select_db($bd,$connect) or die ('erreur de connexion base');

 ?>

