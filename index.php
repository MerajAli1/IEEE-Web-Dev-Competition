<?php include 'includes/session.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clothing Website</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Dancing+Script&family=Playfair+Display&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

  <link rel="stylesheet" href="assets/css/owl-carousel.css">

  <link rel="stylesheet" href="assets/css/lightbox.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>CodePen - Pure CSS | Jake&#39;s Instagram</title>
  <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- ***** Header Area End ***** -->
  <?php include 'includes/header.php'; ?>

  <!-- slider section -->

  <section class=" container-fluid  slider_section"  style="background-color:#eae9e3;">
    <div class="container slider_container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box ">
                    <h1 class=" text-dark">
                      Kurti Collection 2023
                    </h1>
                      <p class="header-paragraph" style="margin-top: 1rem;
    margin-bottom: 2rem;
">
                       New Arrival
                      </p>
                    <a class="d-flex justify-content-center align-items-center" href="./products.html">
                      Shop now
                    </a>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="img-box">
                    <img width="100%" src="assets/images/slider-img1.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1 class=" text-dark">
                      Full Dress Collection
                    </h1>
                    <div class="">
                      <p class=" header-paragraph" style="margin-top: 1rem;
    margin-bottom: 2rem;
">
                        Kurti & Towser
                      </p>
                    </div>
                    <a class="d-flex justify-content-center align-items-center" href="./products.html">
                      Shop now
                    </a>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="img-box">
                    <img width="100%" src="assets/images/slider-img2.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1 class=" text-dark">
                      Welcome To Our
                      Gift Shop
                    </h1>
                    <p class=" header-paragraph" style="margin-top: 1rem;
    margin-bottom: 2rem;
">
                      New Seasons
                    </p>
                    <a class="d-flex justify-content-center align-items-center" href="./products.html">
                      Shop now
                    </a>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="img-box d-flex justify-content-center align-items-center">
                    <img class="ms-5" width="100%" src="assets/images/slider-img3.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <img src="" alt="" />
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end slider section -->

  <!-- ***** Main Banner Area Start ***** -->
  <div class="container-fluid main-banner" id="top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-content">
            <div class="thumb">
              <div class="inner-content">
                <h4>Clothing Solution</h4>
                <span>Awesome, clean &amp; Lorem ipsum dolor sit amet</span>
                <div class="main-border-button">
                  <a href="./products.html">Purchase Now!</a>
                </div>
              </div>
              <img src="assets/images/left-banner-image.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="right-first-image">
                  <div class="thumb">
                    <div class="inner-content">
                      <h4>Women</h4>
                      <span>Best Clothes For Women</span>
                    </div>
                    <div class="hover-content">
                      <div class="inner">
                        <h4>Women</h4>
                        <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.
                        </p>
                        <div class="main-border-button">
                          <a href="./products.html">Discover More</a>
                        </div>
                      </div>
                    </div>
                    <img src="assets/images/baner-right-image-01.jpg">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-first-image">
                  <div class="thumb">
                    <div class="inner-content">
                      <h4>Men</h4>
                      <span>Best Clothes For Men</span>
                    </div>
                    <div class="hover-content">
                      <div class="inner">
                        <h4>Men</h4>
                        <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.
                        </p>
                        <div class="main-border-button">
                          <a href="./products.html">Discover More</a>
                        </div>
                      </div>
                    </div>
                    <img src="assets/images/baner-right-image-02.jpg">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-first-image">
                  <div class="thumb">
                    <div class="inner-content">
                      <h4>Kids</h4>
                      <span>Best Clothes For Kids</span>
                    </div>
                    <div class="hover-content">
                      <div class="inner">
                        <h4>Kids</h4>
                        <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.
                        </p>
                        <div class="main-border-button">
                          <a href="./products.html">Discover More</a>
                        </div>
                      </div>
                    </div>
                    <img src="assets/images/baner-right-image-03.jpg">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-first-image">
                  <div class="thumb">
                    <div class="inner-content">
                      <h4>Accessories</h4>
                      <span>Best Trend Accessories</span>
                    </div>
                    <div class="hover-content">
                      <div class="inner">
                        <h4>Accessories</h4>
                        <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.
                        </p>
                        <div class="main-border-button">
                          <a href="./products.html">Discover More</a>
                        </div>
                      </div>
                    </div>
                    <img src="assets/images/baner-right-image-04.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  
  <!-- Product Overview -->
  <div class="container mb-5">
    <div class="heading_container heading_center">
      <h2>
        Latest Products
      </h2>
    </div>
    <div class="row product-row"> 
     <div class="col-md-9">
      <ul class="nav" style="margin:0px;"  >
      <li class="scroll-to-section"><a href="products.php" style="color: #c8a832;" class="active">All Products</a></li>
      <?php
      		      $conn = $pdo->open();
                $stmt = $conn->prepare("SELECT * FROM category ");
                $stmt->execute();
						    foreach ($stmt as $row) {
      ?>   
         <li class="scroll-to-section"><a href="products.php?category=<?php echo $row['name']; ?>" class="active"><?php echo $row['name']; ?></a></li>
       
      <?php  }  ?>  
        </ul>
     </div>    
     <div class="col-md-3">
      <ul class="nav">
         <li><a href="about.html"><i class="fa-solid fa-magnifying-glass" style="font-size: 1.2vw;"></i>Search</a></li>
      </ul>
     </div>    
    </div> 
     <div class="row product-row2">
     <?php
		       			$month = date('m');

		       			try{
						    $stmt = $conn->prepare("SELECT * from products LIMIT 8");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
	       						echo "
	       							<div class='col-sm-12 col-md-6 col-lg-4 col-xl-3  p-3 mb-5 '>
                                     <div class='product'>
                                      <img class='image-hover-effect' width='100%' src='".$image."' alt=''>
                                      <div class='content'>
                                          <button><a href='single-product.php?productid=".$row['id']."'>Quick View</a></button>
                                      </div>
                                     </div>
                                     <p class='mt-2'>".$row['name']."</p>
                                     <span>".$row['price']." Rs</span><br>
                                    </div>
	       						";
						    }
						    
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?>
      
     
     </div>
      <div class="load-more">
          <button>View All Products</button>
      </div>
      
    </div>
  <!-- end contact section -->

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>

  <!-- Footer -->
   <!-- jQuery -->
   <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>

  <script>

    $(function () {
      var selectedClass = "";
      $("p").click(function () {
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
        $("#portfolio div").not("." + selectedClass).fadeOut();
        setTimeout(function () {
          $("." + selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);

      });
    });

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>