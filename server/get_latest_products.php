<?php



include('connection.php');




$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='latest' LIMIT 4");


$stmt->execute();


$latest_products = $stmt->get_result();//[]




?>