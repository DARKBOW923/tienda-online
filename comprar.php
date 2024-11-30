<?php
require "functions.php";
$mysqli = connectToDb();
echo $_POST['cantidad'];
$result = $mysqli->query("SELECT * FROM test_cart,products where test_cart.id_products = products.id_product ");



?>
<p>confirma tu compra, que son los siguientes productos:</p>
<p>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['id_products'] . " - " . $row['name_product'] . "</p>";
    }
    ?>
</p>
