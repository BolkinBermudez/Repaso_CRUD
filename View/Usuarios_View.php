<?php
//header
session_start();
require_once('plantilla/Header.php');



//Aside
require_once('plantilla/Aside.php');




//Content
$contenido= isset($_GET['c']) ? strtolower($_GET['c']):'ejemplo';
require_once('Contenido/'.$contenido.'.php');




//Footer
require_once('plantilla/Footer.php');
?>

</html>