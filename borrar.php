<?php
require 'functions.php';
$mysqli = connectToDb();
$product = $_GET['id'];
$borrar = deleteFromCart($mysqli,$product);
sleep(2);
echo "se ha borrado el producto ".$product."correctamente, redirigiendo a la pagina principal";
header("Location: index.php");
exit();

?>