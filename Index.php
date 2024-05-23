

<?php include('layouts/header.php'); ?>





        <!--Home-->

        <section id="home">
          <div class="container">
            <h5 style="font-weight: 800;color: rgb(252, 242, 242);">NEW ARRIVALS</h5>
            <h1><span>best prices</span> This Season</h1>
            <p>Eshop Offers The best product For The Most Affortable Prices</p>
            <button>SHOP NOW</button>
          </div>
        </section>


        

<!--brand-->
<section id="brand" class="container">
  <div class="row">
    <img class="img-fluid col-lg-3 col-md-6 col-sn-12" src="./assets/css/imgs/brand1.png"/>
    <img class="img-fluid col-lg-3 col-md-6 col-sn-12" src="./assets/css/imgs/brand2.png"/>
    <img class="img-fluid col-lg-3 col-md-6 col-sn-12" src="./assets/css/imgs/brand3.png"/>
    <img class="img-fluid col-lg-3 col-md-6 col-sn-12" src="./assets/css/imgs/brand4.png"/>
  </div>
</section>



<!--new-->
<section id="NEW" class="w-100">
  <div class="row p-0 m-0">
    <!--one-->
    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img class="img-fluid" src="assets/css/imgs/1.jpg"/>
      <div class="details">
        <h2>AWESOME IPHONE</h2>
        <button class="text-uppercase">shop now</button>
      </div>
    </div>
    <!--two-->
    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img class="img-fluid" src="assets/css/imgs/2.jpg"/>
      <div class="details">
        <h2> 30% OFFER HEADPHONE</h2>
        <button class="text-uppercase">shop now</button>
      </div>
    </div>


    <!--three-->
    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img class="img-fluid" src="assets/css/imgs/3.jpg"/>
      <div class="details">
        <h2>PLAY STATION</h2>
        <button class="text-uppercase">shop now</button>
      </div>
    </div>
  </div>
</section>




<!--featured-->
<section id="featured" class="py-5 pb5">
  <div class="container text-center mt-5 py-5">
    <h1>featured products</h1>
    <hr class="mx-auto">
    <p>Here you can check out our featured products</p>
  </div>
  <div class="row mx-auto container-fluid">
    

  <?php include('server/get_featured_products.php'); ?>

  <?php while($row= $featured_products->fetch_assoc()){?>



    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="./assets/css/imgs/<?php echo $row['product_image']; ?>"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
      <h4 class="p-prize">₹ <?php echo $row['product_price']; ?></h4>
      <a href="<?php echo "single_product1.php?product_id=". $row['product_id']; ?>"><button class="buy-btn"> buy now</button></a>
    </div>

   

    

   <?php } ?>
  </div>
</section>



<!--banner-->
<section id="banner" class="my-5 py-5">
  <div class="container">
    <h4>MID SEASON'S SALE</h4>
    <h1>autumn collection<br>up to 30% offer</h1>
    <button class="text-uppercase">shop now</button>
  </div>
</section>



<!--phone-->

<section id="featured" class="py-5">
  <div class="container text-center mt-5 py-5">
    <h3>Latest phones</h3>
    <hr class="mx-auto">
    <p>Here you can check out our amazing phones</p>
  </div>
  <div class="row mx-auto container-fluid">


<?php include('server/get_phones.php'); ?>

<?php while($row=$phones_products->fetch_assoc()){ ?>


    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="./assets/css/imgs/<?php echo $row['product_image'] ?>"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
      <h4 class="p-prize">₹<?php echo $row['product_price']  ?></h4>
      <a href="<?php echo "single_product1.php?product_id=". $row['product_id']; ?>"><button class="buy-btn"> buy now</button></a>
      
    </div>
    <?php } ?>

   
  
   
  </div>
</section>



<!--watches-->

<section id="featured" class="py-5">
  <div class="container text-center mt-5 py-5">
    <h3>Latest watches</h3>
    <hr class="mx-auto">
    <p>Here you can check out our design watches</p>
  </div>
  <div class="row mx-auto container-fluid">

  <?php include('server/get_watches.php'); ?>
  <?php  while($row=$watches->fetch_assoc()){  ?>


    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
    <img class="img-fluid mb-3" src="./assets/css/imgs/<?php echo $row['product_image']; ?>"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
      <h4 class="p-price">₹<?php echo $row['product_price']; ?></h4>
      <a href="<?php echo "single_product1.php?product_id=". $row['product_id']; ?>"><button class="buy-btn"> buy now</button></a>
    </div>


  <?php  } ?>

  </div>
</section>


<!--latest product-->

<section id="featured" class="py-5">
  <div class="container text-center mt-5 py-5">
    <h3>Latest products</h3>
    <hr class="mx-auto">
    <p>Here you can check out our latest products</p>
  </div>
  <div class="row mx-auto container-fluid">

  <?php include('server/get_latest_products.php'); ?>
  <?php  while($row=$latest_products->fetch_assoc()){  ?>



    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="./assets/css/imgs/<?php echo $row ['product_image']; ?>"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
      <h4 class="p-price">₹<?php echo $row['product_price']; ?></h4>
      <a href="<?php echo "single_product1.php?product_id=". $row['product_id']; ?>"><button class="buy-btn"> buy now</button></a>
    </div>


    <?php } ?>

    

   

   
  </div>
</section>


<!--best laptop-->

<section id="featured" class="py-5">
  <div class="container text-center mt-5 py-5">
    <h3>Latest laptops</h3>
    <hr class="mx-auto">
    <p>Here you can check out our unique laptops</p>
  </div>
  <div class="row mx-auto container-fluid">

  <?php include('server/get_laptops.php'); ?>
  <?php  while($row=$laptops->fetch_assoc()){  ?>


    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="./assets/css/imgs/<?php echo $row['product_image'] ?>"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
      <h4 class="p-price">₹<?php echo $row['product_price']; ?></h4>
      <a href="<?php echo "single_product1.php?product_id=". $row['product_id']; ?>"><button class="buy-btn"> buy now</button></a>
    </div>

    <?php } ?>


   
  </div>
</section>





<?php include('layouts/footer.php'); ?>





