<?php

include('server/connection.php');


if(isset($_GET['product_id'])){

 $product_id = $_GET['product_id']; 



  $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
  $stmt->bind_param("i",$product_id);


  $stmt->execute();


  $product = $stmt->get_result();//[]



  





  //no product id was given

}else{

  header('location: index.php');


}



?>





<?php include('layouts/header.php'); ?> 





<!--single product-->
<section class="container single-product my-5 pt-5">
  <div class="row mt-5">

  <?php while($row = $product->fetch_assoc()){ ?>

 


    <div class="col-lg-5 col-md-6 col-sm-12">
      <img class="img-fluid w-100 pb-1" src="assets/css/imgs/<?php echo $row['product_image']; ?>" id="mainImg" />
      <div class="small-img-group">
        <div class="small-img-col">
          <img src="assets/css/imgs/<?php echo $row['product_image']; ?>" width="100%" class="small-img"/>
        </div>
        <div class="small-img-col">
          <img src="assets/css/imgs/<?php echo $row['product_image2']; ?>" width="100%" class="small-img"/>
        </div>
        <div class="small-img-col">
          <img src="assets/css/imgs/<?php echo $row['product_image3']; ?>" width="100%" class="small-img"/>
        </div>
        <div class="small-img-col">
          <img src="assets/css/imgs/<?php echo $row['product_image4']; ?>" width="100%" class="small-img"/>
        </div>
      </div>
    </div>

   


    


    <div class="col-lg-6 col-md-12 col-12">
      <h6>GADGETS</h6>
      <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
      <h2>₹<?php echo $row['product_price']; ?></h2>

      <form method="POST" action="cart.php"> 
          <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
          <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/>
          <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
          <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>

             <input type="number" name="product_quantity" value="1"/>
             <button class="buy-btn" type="submit" name="add_to_cart">add To cart</button>
      </form> 

      
      <h4 class="mt-5 mb-5">PRODUCT DETAILS</h4>


      <span>

      </span><?php echo $row['product_description']; ?>
    </div>
 


    <?php } ?>



  </div>
</section>







<!--related products-->
<section id="related-products" class="py-5 pb5">
  <div class="container text-center mt-5 py-5">
    <h1>Related products</h1>
    <hr class="mx-auto">
  </div>
  <div class="row mx-auto container-fluid">
    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="./assets/css/imgs/featured5.webp"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <h5 class="p-name">Headset</h5>
      <h4 class="p-prize">₹4000</h4>
      <button class="buy-btn"> buy now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="./assets/css/imgs/featured2.webp"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <h5 class="p-name">Croma TV</h5>
      <h4 class="p-prize">₹10,0000</h4>
      <button class="buy-btn"> buy now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="./assets/css/imgs/featured3.webp"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <h5 class="p-name">playstation</h5>
      <h4 class="p-prize">₹6000</h4>
      <button class="buy-btn"> buy now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="./assets/css/imgs/featured4.webp"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Airpods</h5>
      <h4 class="p-prize">₹3000</h4>
      <button class="buy-btn"> buy now</button>
    </div>
  </div>
</section>



  




   

    <script>

     var mainImg = document.getElementById("mainImg");
     var smallImg = document.getElementsByClassName("small-img"); 


     for(let i=0; i<4; i++) {
      
              smallImg[i].onclick =function(){
              mainImg.src = smallImg[i].src;
            }
     }

  
    </script>



<?php include('layouts/footer.php'); ?> 