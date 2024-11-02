<?php




$mysqli = new mysqli ('192.168.1.40', 'root2', 'smx', 'onlineStore');
require 'functions.php';



if (!isset($currentCategory['category'])){
    echo "Current category selected: none";
}else{
    echo "THIS IS THE CATEGORY!".$currentCategory['category'];
}
listProducts($mysqli);
$result = test($_GET['category']);

/*$products = $mysqli->query("SELECT * FROM products where category ='".$_GET['category']."'");
forEach ($products as $product){
    echo '<p>' . $product['name_product'] . '</p>';
}*/


?>