<?php
require 'functions.php';
$mysqli = connectToDb();
$_GET['id'] = null;
echo "id = ".$_GET['id'];
$id = $_GET['id'];
    $product = showCart($mysqli);  // Obtienes los productos del carrito
    while ($products = $product->fetch_assoc()) {
        echo "<p>" . $products['id_products'] . " - " . $products['name_product'] . "</p>";

        // Botón para eliminar el producto del carrito
        echo "
        <a href='borrar.php?id=" . $products['id_products'] . "'><button>Eliminar</button></a>
    ";
    }
 
?>


<a href="index.php">Volver atrás</a>