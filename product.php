<?php
require 'functions.php';
$mysqli = connectToDb();
echo $_GET['id'];
getProductById($mysqli,$_GET['id']);

?>