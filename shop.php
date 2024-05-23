<?php



include('server/connection.php');




$stmt = $conn->prepare("SELECT * FROM products");


$stmt->execute();


$products = $stmt->get_result();//[]




?>



 



<?php include('layouts/header.php'); ?>  
                

   




<!--shop-->
<section id="featured" class="py-5 pb5">
    <div class="container text-center mt-5 py-5">
      <h3>our products</h3>
      <hr class="mx-auto">
      <p>Here you can check out our products</p>
    </div>
    <div class="row mx-auto container">
      
    
      <?php while($row = $products->fetch_assoc()) { ?>



      <div onclick="window.location.href='single_product1.html'; "class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="./assets/css/imgs/<?php echo $row['product_image']; ?>"/>
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name'];  ?></h5>
        <h4 class="p-prize">₹<?php echo $row['product_price']; ?></h4>
        <a class="btn buy-btn" href="<?php echo "single_product1.php?product_id=".$row['product_id']; ?>">buy now</a>
      </div>

      <?php } ?>
  



      <nav aria-label="page navigation example">
        <ul class="pagination mt-5">
          <li class="page-item"><a class="page-link" href="#">previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">NEXT</a></li>
        </ul>
      </nav>





    </div>
</section>



 

<?php include('layouts/footer.php'); ?>  