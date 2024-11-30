
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mysqli = new mysqli ('192.168.1.40', 'root2', 'smx', 'onlineStore');
require 'functions.php';

if (isset($_GET['category'])){
    echo "Current category selected:".$_GET['category'];
    $result = getProductByCategory($_GET['category'],$mysqli);
}else{
    $_GET['category'] = null;
    listAllCategories($mysqli);
    listProducts($mysqli);
}
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>

