<head>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
function connectToDb(){
    $mysqli = new mysqli ('192.168.1.40', 'root2', 'smx', 'onlineStore');
return $mysqli;
}
$mysqli = connectToDb();
function getProductByCategory($category,$mysqli){
    $products = $mysqli->query("SELECT * FROM products where category ='".$_GET['category']."'");
    if ($products->num_rows == 0){
        listAllCategories($mysqli);
        echo "No products available for this category";
    }else{
        listAllCategories($mysqli);
        echo "<div class=products-container>";
        forEach ($products as $product){
           
            echo "<a href='product.php?id=".$product['id_product']."'><div> <img class=preview src=".$product['image']."/><p>".$product['name_product']."</p></a></div>";
        }
        echo "</div>";
    }
}
//obtener la lista de los productos, en este caso se obtienen todos los productos.
function listProducts($mysqli){
    echo "<div class=products-container>";
$products = $mysqli->query('SELECT * FROM products');
foreach($products as $product) {
    echo '
<a href=product.php?id=' . $product['id_product'] . '><div><img class=preview src='.$product['image'].'/><p>' . $product['name_product'] . '</p></div></a>
';
    }
    echo "</div>";
}
function listAllCategories($mysqli){
    $categories = $mysqli -> query("SELECT * FROM categories");
       echo "<div class=container-end>";
       echo "<a href='buy.php'>ver tu carrito:</a>";
       echo "<a href='login.php'>Login!</a>";
       echo "<a href='register.php'>Register!</a>";
       
        echo "</div>";
   echo "<div class=categories-container>";
    foreach ($categories as $category){
        echo '<div class=rows><a href=index.php?category=' . $category['name'] . '><p>' . $category['name'] . '</p></a></div>';
    }
    echo "</div>";
}
function getProductById($mysqli, $id_product){
    $product = $mysqli->query("SELECT * FROM products where id_product = '".$id_product."'");
    echo "<div class='specific-product'>";
    forEach ($product as $products){
        echo "<div class=centrar>
   <h1> Name: " . $products['name_product'] .
            "</h1> Cantidad: " . $products['quantity'] .
            " <p> Categoría: " . $products['category'] .
            "</p> <img class='imagen' src='" . $products['image'] . "' referrerpolicy='no-referrer'><br/>
    <a href='addCart.php?id=" . $products['id_product'] . "'>
        <button>Comprar</button>
    </a>
</div>";
    }
    echo "</div>";
}
function showCart($mysqli){
    $result = $mysqli->query("SELECT * FROM test_cart,products where test_cart.id_products = products.id_product ");
    if ($result->num_rows == 0){
        echo "no hay productos";
    }
    return $result;
}
function addToCart($mysqli,$id_product){
 $mysqli->query("INSERT INTO test_cart VALUES ($id_product)");
}
function deleteFromCart($mysqli, $id_product) {
    // Definir la consulta SQL para eliminar el producto de test_cart
    $query = "DELETE FROM test_cart WHERE id_products = $id_product";
    $mysqli->query($query);
    echo $query;
}

?>