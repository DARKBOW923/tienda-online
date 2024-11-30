<?php
require 'functions.php';
$mysqli = connectToDb();
echo "id = ".$_GET['id'];
echo "id product".$_POST['id_product'];
addToCart($mysqli,$_GET['id']);
sleep(5);

// Redirigir a otra página
header("Location: buy.php")
;
exit();


?>