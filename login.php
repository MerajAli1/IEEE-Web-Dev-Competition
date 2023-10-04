
<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
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
  </style>
</head>

  <!-- ***** Header Area End ***** -->
  <?php include 'includes/header.php'; ?>


<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">


       
	<div class="main">  	
  <?php
      if(isset($_SESSION['error'])){
        echo "
          <div style='padding: 0px;
          position: absolute;
          width: 550px;
          background-color: #751111;
          padding: 2vh 0vw;
          ' class='callout callout-danger text-center'>
            <p style='margin: 0px;
            font-size: 1.32rem;
            color: white;
            '>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div style='padding: 0px;
          position: absolute;
          width: 550px;
          background-color: #751111;
          padding: 2vh 0vw;
          ' class='callout callout-success text-center'>
            <p style='margin: 0px;
            font-size: 1.32rem;
            color: white;
            ' >".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
 ?>
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="register.php" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="firstname" placeholder="User name" required="">
					<input type="text" name="lastname" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="password" name="repassword" placeholder="Re Enter Password" required="">

					<button type="submit"  name="signup">Sign up</button>
				</form>
			</div>

			<div class="login" >
    	    <form action="verify.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit"  name="login">Login</button>
				</form>
			</div>
	</div>
    <!-- Footer -->
   
      <?php include 'includes/footer.php'; ?>

    <!-- Footer -->
    <?php include 'includes/scripts.php'; ?>

</body>
</html>