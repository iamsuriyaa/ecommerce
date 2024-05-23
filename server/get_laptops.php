<?php



include('connection.php');




$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='laptops'  LIMIT 4");


$stmt->execute();


$laptops = $stmt->get_result();//[]




?>