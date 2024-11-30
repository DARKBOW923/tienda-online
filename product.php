<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>
<?php
require 'functions.php';
$mysqli = connectToDb();
echo "OEJOFJEFEOJF".$_GET['id'];
$id_product = $_GET['id'];
listAllCategories($mysqli);
if (isset($_COOKIE['visited'])) {
    unset($_COOKIE['visited']);
    setcookie('visited', '', time() - 3600, '/'); 
}
getProductById($mysqli,$_GET['id']);


?>
<?php



?>


