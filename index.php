<?php
$mysqli = new mysqli ('192.168.1.40', 'root2', 'smx', 'onlineStore');
require 'functions.php';

if (isset($_GET['category'])){
    echo "Current category selected:".$_GET['category'];
    $result = getProductByCategory($_GET['category'],$mysqli);
}else{
    echo "No category".$_GET['category'];
    listProducts($mysqli);
}
listAllCategories($mysqli);

/*$products = $mysqli->query("SELECT * FROM products where category ='".$_GET['category']."'");
forEach ($products as $product){
    echo '<p>' . $product['name_product'] . '</p>';
}*/


?>