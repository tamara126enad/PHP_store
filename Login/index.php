<?php
  session_start();
  // if(!empty($_SESSION['email'])){
  //   echo "<style> .restrict{display:none;} </style>";
  
  // }else{echo "<style> .restrict{display:block;} </style>";}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing page</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css%22%3E">
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&family=Patrick+Hand&family=Poppins:wght@100;200;300;400&family=Smooch&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
  <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.css">
  <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css”rel=”nofollow”
    integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../Welcome/style1.css">
  <link rel="stylesheet" href="../style2.css">


</head>


<body style="font-family: 'Nunito', sans-serif;
font-family: 'Patrick Hand', cursive;">
  <div class="l-header">
    <div class="land-container">

      <div class="navbar">
        <div class="logo"><img src="../img/logo_kids.gif" width="90px"> </div>

        <nav>
          <ul style="margin-right: 5%; font-family: 'Nunito', sans-serif;
font-family: 'Patrick Hand', cursive; ">
            <li><a href="">Home</a></li>
            <li><a href="../product/product.php">Products</a></li>
            <li><a href="../Welcome/ContactUs.html">Contact Us</a></li>
            <li><a href="../Welcome/AboutUs.html">About US</a></li>
            <li id="restrict3"><a href="../User/User.php"><i class="fa fa-user" aria-hidden="true"></i></a></li> 
             <li><a href="../Cart/cart.php"><i class="fas fa-shopping-cart"></i></i></a></li>
           
          </ul>
          <hr style="width:70%; margin-left: 31%;">
        </nav>

      </div>

      <div class="l-row" style="margin-top: -7%;">
        <div>
          <h1 style="color: darkred;">Store For Children's toys Contain <br> The Most Of Kinds In One Places.</h1>
          <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, <br>when an unknown printer took a galley of type and scrambled it to make
            a type specimen book. It has survived not only five</p>
        </div>
        <div class="l-word">
          <img src="../img/baby-store-hero-baby-img.png">

        </div>
      </div>

    </div>
  </div>

  <!-- slid -->

  <!-- ///////////// -->

  <section>
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">

          <div class="slide-container">
            <div class="wgh-slider">
              <input class="wgh-slider-target" type="radio" id="slide-1" name="slider" />
              <input class="wgh-slider-target" type="radio" id="slide-2" name="slider" />
              <input class="wgh-slider-target" type="radio" id="slide-3" name="slider" checked="checked" />
              <input class="wgh-slider-target" type="radio" id="slide-4" name="slider" />
              <input class="wgh-slider-target" type="radio" id="slide-5" name="slider" />
              <div class="wgh-slider__viewport">
                <div class="wgh-slider__viewbox">
                  <div class="wgh-slider__container">
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="../img/image-1.jpg" alt="TGirls Play Kitchens" />
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://f4.bcbits.com/img/a3905613628_16.jpg">Girls Play Kitchens</a><span>27
                              JD</span></figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-1" title="Show product 1"></label>
                      </div>
                    </div>
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="../img/image-2.jpg" alt="Disney Car Toys" />
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://f4.bcbits.com/img/a3905613628_16.jpg">Disney Car Toys</a><span>15 JD</span>
                          </figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-2" title="Show product 2"></label>
                      </div>
                    </div>
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="../img/image-3.jpg" alt="Kids' Electric Vehicles" />
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://f4.bcbits.com/img/a3905613628_16.jpg">Kids' Electric Vehicles</a><span>140
                              JD</span></figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-3" title="Show product 3"></label>
                      </div>
                    </div>
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="../img/image-4.jpg" alt="block building set" />
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://f4.bcbits.com/img/a3905613628_16.jpg">block building set</a><span>80
                              JD</span></figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-4" title="Show product 4"></label>
                      </div>
                    </div>
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="../img/image-5.jpg" alt="smart blocks toys" />
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://picsum.photos/id/237/480/480">smart blocks toys</a><span>24 JD</span>
                          </figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-5" title="Show product 5"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partial -->

        </div>
      </div>
    </div>
  </section>

  <!-- end of slider -->

  <div class="category-container">
    <div class="small-container-categort">
      <h2 style="margin-top: 30px;">Store category</h2>
      <div class="l-row-2">
        <div class="l-word-2">

          <a href="./product/product.php"> <img src="../img/image-4.jpg" alt="img category" width="500em;">
            <h3 style="text-align:center; color:orangered;">Electronic Toys</h3>
        </div>
        <div class="l-word-2"></a>

          <a href="./product/product.php"><img src="../img/image-6.jpg" alt="img category">
            <h3 style="text-align:center ; color:darkblue;">Crative Toys</h3>
          </a>
        </div>
        <div class="l-word-2"></a>
          <a href="./product/product.php"><img src="../img/image-1.jpg" alt="img category">
            <h3 style="text-align:center ; color:yellowgreen;">Educational Toys</h3>
        </div>
        <div class="l-word-2"></a>
          <a href="./product/product.php"><img src="../img/image-3.jpg" alt="img category">
            <h3 style="text-align:center ; color:palevioletred;">Dolls Toys</h3>
        </div></a>

      </div>
    </div>
  </div>
  </div>

  <!-- ///////////////////////////////////discount section///////////////// -->

  <div class="l-discount " style="text-align:center">

    <div class="l-word-discount ">
      <img src="../img/sale1_1.gif" width="3%">

    </div>
    <div style="margin-top:3% ;" class="l-word-discount ">
      <h1>We have special discounts. Do not miss it !<br>
        Let's shop now.</h1> <a href="../product/product.php" class=" btn-dicount ">click here</a>

      <br><br>
      <?php
   include_once '../Configration/connection.php';

  $sql = "SELECT * FROM products WHERE code='MST2';";
  if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){ 
        while($row = mysqli_fetch_array($result)){

?>
      <div class="col-md-4" style="display:flex">
        <div>
          <form action="" method="GET">
            <figure class="card card-product-grid">
              <div class="img-wrap" style="text-align:center">
                <img style="width:200px" src="<?php echo $row['img'];?>">
                <!-- ################################################### -->
                <label>
                  <?php
               $cat= "SELECT categories.category_name FROM categories INNER JOIN products
               ON products.category_id=categories.category_id;";
               $res=mysqli_query($conn, $cat);?>

                </label><br>

              </div>
              <figcaption class="info-wrap">
                <div class="fix-height" style="text-align:center">
                  <a href="../product/singleproduct.php?id=<?php echo $row['product_id']; ?>" class="title">
                    <?php echo $row['product_name']; ?>
                  </a>

                  <div class="price-wrap mt-2">
                    <span class="price">Price:
                      <?php echo $row['price']; ?> $
                    </span>
                  </div>
                </div>
                <!-- col.// -->
                <br>

                <input type="hidden" name="hidden_product_name" value="<?php echo $row[" product_name"]; ?>">
                <input type="hidden" name="id_prod" value="<?php echo $row['product_id'] ?>">

                <!-- <input type="hidden" name="id_user"> -->
                <input type="hidden" name="hidden_price" value="<?php echo $row[" price"]; ?>">
                <!----------------------------- change the color of the buttons 21-5-2022 at 6:22pm ------------------------>
              </figcaption>
            </figure>
          </form>
        </div> <!-- col.// -->

        <?php  }
}else{
echo "<h3>NO DATA FOUND.</h3>";
} ?>
      </div> <!-- row end.// -->
    </div>
  </div>

  <div style="text-align:center" class="col-lg-12">


    <?php } ?>
  <!-- //////////////////footer -->
  </div></div></div></div>
  <div class="container-fluied">
    <!-- Footer -->
    <footer class="text-center text-lg-start "
      style="background: linear-gradient(to right,  #e558519a,#e46a6493, rgba(216, 112, 147, 0.215));">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                Toys Shop
              </h6>
              <p style="text-align: justify; ">
                Toys shop has announced that Toys store is opening , its separate platform that provides The most
                distinctive games that the child spends his time enjoying and learning, has amassed more than 35 million
                customers.
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />


            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
              <p><i class="fas fa-home mr-3"></i> Aqaba , Jordan</p>
              <p><i class="fas fa-envelope mr-3"></i> info@mail.com</p>
              <p><i class="fas fa-phone mr-3"></i> +960 7710101010</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

              <!-- linkedin majd -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="https://web.facebook.com/ToysRUsME/?lng=en&subpath=en-qa&_rdc=1&_rdr" role="button"><i
                  class="fab fa-facebook-f"></i></a>


              <br>
             
              <a class="btn btn-primary btn-floating m-1" style="background-color: #333333"
                href="https://github.com/samaralkhamis/Project5PHP" role="button" target="_blank"><i class="fab fa-github"></i></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        MST<sup>2</sup>&nbsp; © 2022 Copyright:
        <a href="https://www.orange.jo/ar/pages/default.aspx" target="_blank">Orange.jo</a>

      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->



</body>

</html>