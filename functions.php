<head>
    <link rel="stylesheet" href="styles.css">
</head>
<p class="title">fefefefefe</p>
<?php
echo "heeee";
function connectToDb(){
    $mysqli = new mysqli ('192.168.1.40', 'root2', 'smx', 'onlineStore');
return $mysqli;
}
$mysqli = connectToDb();
function getProductByCategory($category,$mysqli){
    $products = $mysqli->query("SELECT * FROM products where category ='".$_GET['category']."'");
    forEach ($products as $product){
        echo "<a href='product.php?id=".$product['id_product']."'>".$product['name_product']."</a>";
    }
}
//obtener la lista de los productos, en este caso se obtienen todos los productos.
function listProducts($mysqli){
$products = $mysqli->query('SELECT * FROM products');
foreach($products as $product) {
    echo '
<a href=product.php?id=' . $product['id_product'] . '><p>' . $product['name_product'] . '</p></a>
';
    }
}
function listAllCategories($mysqli){
    $categories = $mysqli -> query("SELECT * FROM categories");
    foreach ($categories as $category){
        echo '<a href=index.php?category=' . $category['name'] . '><p>' . $category['name'] . '</p></a>';
    }
}
function getProductById($mysqli, $id_product){
    $product = $mysqli->query("SELECT * FROM products where id_product = '".$id_product."'");
    forEach ($product as $products){
        echo "<div>name: ".$products['name_product']."quantity:".$products['quantity']."category".$products['category']."<img src=".$products['image']."referrerpolicy='no-referrer'></div>";
    }
}

?>