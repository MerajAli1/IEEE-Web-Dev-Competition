<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	$productid = $_GET['productid'];

	try{
		 		
	    $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE products.id = :productid");
	    $stmt->execute(['productid' => $productid]);
	    $product = $stmt->fetch();
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//page view
	$now = date('Y-m-d');
	if($product['date_view'] == $now){
		$stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid']]);
	}
	else{
		$stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid'], 'now'=>$now]);
	}

?>

<!doctype html>
<html lang="en">

<head>
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



  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img width="100%" src="assets/images/logo.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav mainmenu">
              <li class="scroll-to-section"><a href="./index.php" class="active">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li class="scroll-to-section"><a href="#explore">Explore</a></li>
            </ul>
              
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
        <div class="col-4 cartnavparent">
           <ul class="nav" style="float:right;">
              <li class="scroll-to-section" style="padding-right:1.6vw;"><a href="./index.html" class="active" style="color:#696c7b;"><i class="fa-solid fa-magnifying-glass" style="font-size: 1.2vw;"></i></a></li>
              <li class="scroll-to-section" style="padding-right:1.6vw;"><a href="./index.html" class="active" style="color:#696c7b;"><i class="fa-solid fa-right-to-bracket" style="font-size: 1.2vw;"></i></a></li>
              <li>
                <a href="about.html"  class="dropdown-toggle" data-toggle="dropdown" style="color:#696c7b; position:relative;">
                  <i class="fa-solid fa-cart-shopping" style="font-size: 1.2vw;"></i>
                  <span class="label label-success cart_count" style="position: absolute;
bottom: 15px;
left: 11px;
background-color: #c8a832;
padding: 0px;
height: auto;
font-size: 0.71vw;
width: 13px;
text-align: center;
color: white;"></span>
                </a>
                <ul class="dropdown-menu">
                   <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
                    <li>
                     <ul class="menu" id="cart_menu">
                     </ul>
                    </li>
                   <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
                </ul>
              </li>
              <li class="menu-trigger-parent"><a href="#"><i class="fa-solid fa-bars menu-trigger" style="color:#696c7b;"> </a></i></li>
            </ul>
        </div>
      </div>
    </div>
  </header>
<!-- slider section -->
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Perfect Clothing Solution</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="left-images">
                        <img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>" >
                    </div>
                </div>
              

                <div class="col-lg-5">
                    <div class="right-content">
                        <h4><?php echo $product['prodname']; ?></h4>
                        <span class="price"> <?php echo number_format($product['price'], 2); ?> Rs</span>
                        
                        <span><?php echo $product['description'] ?></span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                        </div>
                        <form class="form-inline" id="productForm" >
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                             <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
                             <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus" id="minus">
                                    <input type="number" step="1" min="1"
                                        max="" name="quantity" id="quantity" value="1" title="Qty" class="input-text qty text"
                                        size="4" pattern="" inputmode="">

                                    <input type="button" value="+" class="plus" id="add">
                                </div>
                             </div>
                        </div>
                        <div class="quantity-content" style="margin-top:0px; display: flex; flex-direction: row;">
                            <div class="left-content" style="width: 50%;">
                                <h6>Select Size </h6>
                            </div>
                             <div class="right-content" style="display: flex; flex-direction: row; align-items: flex-end; justify-content: center; width: 50%;">
                                <div class="quantity buttons_added" style="display: flex; justify-content: flex-end;">
                                  <select id="country" name="size" class="form-select" style="width: 55%;">
                                  <?php 
                                    $stmt = $conn->prepare("SELECT * from Size");
						                        $stmt->execute();
						                        foreach ($stmt as $row) { 
                                    $size =$row['name'] . ' -> Shoulder : ' . $row['shoulder'] . ' inches || Chest : ' . $row['chest'] . ' inches || Waist : ' . $row['waist'] . ' inches || Hips : ' . $row['hips'] . ' inches ' ;

                                  ?>
                                  <option value=<?php echo $row['name']; ?>><?php echo $size ?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                             </div>
                        </div>
                        <div class="total">
                            <div class="main-border-button"><button style="padding: 2vh 4vw;
    border-radius: 20px;
    border: none;
    background-color: #c8a832;
    color: white;" type="submit">Add To Cart</button></div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->

    <!-- Footer -->
   
      <?php include 'includes/footer.php'; ?>

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

  
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script>
</body>
</html>