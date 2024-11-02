<?php
function connectToDb(){
    $mysqli = new mysqli ('192.168.1.40', 'root2', 'smx', 'onlineStore');
return $mysqli;
}
$mysqli = connectToDb();
function test($category,$mysqli){
    $products = $mysqli->query("SELECT * FROM products where category ='".$_GET['category']."'");
    forEach ($products as $product){
        echo '<p>' . $product['name_product'] . '</p>';
    }
}
function listProducts($mysqli){}
$categories = $mysqli->query('SELECT * FROM categories');
foreach($categories as $category) {
    echo '
<a href=index.php?category=' . $category['name'] . '><p>' . $category['name'] . '</p></a>
';
}

?>