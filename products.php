<?php include 'includes/session.php'; 
getFilename()
?>
<?php

	$name = $_GET['category'];

	$conn = $pdo->open();

	try{
        if(isset($_GET['category'])){
		$stmt = $conn->prepare("SELECT * FROM category WHERE name = :name");
		$stmt->execute(['name' => $name]);
		$cat = $stmt->fetch();
        $catid = $cat['id'];
        }
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clothing Website</title>
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
  <link rel="stylesheet" href="assets/css/owl-carousel.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
  <style>
     .header-area{
       position:relative;
     }
     .page-heading{
       margin-top:0px !important;
     }
  </style>
</head>



<body>

  


  <!-- ***** Header Area Start ***** -->
  <?php include 'includes/header.php'; ?>
   <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Explore Our Products</h2>
                        <span>Awesome Range of Choice</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <?php 						  
                if(isset($_GET['category'])){
                $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
						    $stmt->execute(['catid' => $catid]);
                }else{
                    $stmt = $conn->prepare("SELECT * FROM products");
                    $stmt->execute();
                }            
                            foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg'; ?>
                
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.php?productid=<?php echo $row['id']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['price']; ?></span>
                            
                        </div>
                    </div>
                </div>
              <?php } 	$conn = $pdo->open();
 ?>
            </div>
        </div>        
    </section>
    <!-- ***** Products Area Ends ***** -->

    <!-- Footer -->
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

</body>

</html>