<!doctype html>

                        <html>
                        <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clothing Website</title>
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
    <style>
     .header-area{
       position:relative;
     }
  </style>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body{
    background: #ddd3;
    height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: Muli;
    font-size: 14px;    
    flex-direction: column !important;
}
.card{
    margin: auto;
    width: 38%;
    max-width:600px;
    padding: 4vh 0;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-top: 3px solid rgb(200, 168, 50);
    border-bottom: 3px solid rgb(200, 168, 50);
    border-left: none;
    border-right: none;
}
@media(max-width:768px){
    .card{
        width: 90%;
    }
}
.title{
    color: rgb(200, 168, 50);
    font-weight: 600;
    margin-bottom: 2vh;
    padding: 0 8%;
    font-size: initial;
}
#details{
    font-weight: 400;
}
.info{
    padding: 5% 8%;
}
.info .col-5{
    padding: 0;
}
#heading{
    color: grey;
    line-height: 6vh;
}
.pricing{
    background-color: #ddd3;
    padding: 2vh 8%;
    font-weight: 400;
    line-height: 2.5;
}
.pricing .col-3{
    padding: 0;
}
.total{
    padding: 2vh 8%;
    color: rgb(200, 168, 50);
    font-weight: bold;
}
.total .col-3{
    padding: 0;
}
.footer{
    padding: 0 8%;
    font-size: x-small;
    color: black;
}
.footer img{
    height: 5vh;
    opacity: 0.2;
}
.footer a{
    color: rgb(200, 168, 50);
}
.footer .col-10, .col-2{
    display: flex;
    padding: 3vh 0 0;
    align-items: center;
}
.footer .row{
    margin: 0;
}
#progressbar {
    margin-bottom: 3vh;
    overflow: hidden;
    color: rgb(200, 168, 50);
    padding-left: 0px;
    margin-top: 3vh
}

#progressbar li {
    list-style-type: none;
    font-size: x-small;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
    color: rgb(160, 159, 159);
}

#progressbar #step1:before {
    content: "";
    color: rgb(200, 168, 50);
    width: 5px;
    height: 5px;
    margin-left: 0px !important;
    /* padding-left: 11px !important */
}

#progressbar #step2:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-left: 32%;
}

#progressbar #step3:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 32% ; 
    /* padding-right: 11px !important */
}

#progressbar #step4:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 0px !important;
    /* padding-right: 11px !important */
}

#progressbar li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #ddd;
    border-radius: 50%;
    margin: auto;
    z-index: -1;
    margin-bottom: 1vh;
}

#progressbar li:after {
    content: '';
    height: 2px;
    background: #ddd;
    position: absolute;
    left: 0%;
    right: 0%;
    margin-bottom: 2vh;
    top: 1px;
    z-index: 1;
}
.progress-track{
    padding: 0 8%;
}
#progressbar li:nth-child(2):after {
    margin-right: auto;
}

#progressbar li:nth-child(1):after {
    margin: auto;
}

#progressbar li:nth-child(3):after {
    float: left;
    width: 68%;
}
#progressbar li:nth-child(4):after {
    margin-left: auto;
    width: 132%;
}

#progressbar  li.active{
    color: black;
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: rgb(200, 168, 50);
}</style>
                                </head>
                                <?php include 'includes/session.php'; ?>
<?php
	if(!isset($_SESSION['user'])){
		header('location: index.php');
	}
?>
<?php include 'includes/header.php'; 
$id = $_SESSION['user'];
$salesid = $_GET['id'];
                        $stmt = $conn->prepare("SELECT * FROM sales WHERE user_id =:id AND id =:salesid ORDER BY sales_date DESC ");
                        $stmt->execute(['id'=>$id ,'salesid' => $salesid ]);
                        foreach($stmt as $row){
                            $address = $row['deliveryaddress'] . ',' . $row['deliverycity'] . ',' . $row['deliverystate'] . ',' . $row['deliverycountry'];

                          


?>
                                <body className='snippet-body'>
                                <div class="card">
            <div class="title">Purchase Reciept</div>
            <div class="info">
                <div class="row">
                    <div class="col-7">
                        <span id="heading">Date</span><br>
                        <span id="details"><?php echo $row['sales_date'] ?></span>
                    </div>
                    <div class="col-5 pull-right">
                        <span id="heading">Order No.</span><br>
                        <span id="details"><?php echo $row['pay_id'] ?></span>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-7">
                        <span id="heading">Customer Name</span><br>
                        <span id="details"><?php echo $row['buyername'] ?></span>
                    </div>
                    <div class="col-5 pull-right">
                        <span id="heading">Delivery Address</span><br>
                        <span id="details"><?php echo $address ?></span>
                    </div>
                </div>   
            </div>      
            <div class="pricing">
            <?php 
             $stmt = $conn->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id WHERE details.sales_id=:id");
             $stmt->execute(['id'=>$row['id']]);
             $total = 0;
             $address = $row['deliveryaddress'] . ',' . $row['deliverycity'] . ',' . $row['deliverystate'] . ',' . $row['deliverycountry'];

                   foreach($stmt as $details){
                    $subtotal = $details['price']*$details['quantity'];
                    $total += $subtotal;
            ?>
                <div class="row">
                    <div class="col-9">
                        <span id="name"><?php echo $details['name'] ?></span>  
                    </div>
                    <div class="col-3">
                        <span id="price"><?php echo $details['price'] ?></span>
                    </div>
                </div>
                   <?php } ?>
               
            </div>
            <div class="total">
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3"><big><?php echo $total ?></big></div>
                </div>
            </div>
            <div class="tracking">
                <div class="title">Tracking Order</div>
            </div>
            <div class="progress-track">
                <ul id="progressbar">
                    <li class="step0 <?php if ($row['orderstatus'] === "Order Placed" || $row['orderstatus'] === "Order Confirmed" || $row['orderstatus'] === "Order Handled To Courier Company" || $row['orderstatus'] === "Order Delivered" ) {
                       echo "active";
                    } ?> " id="step1" style="width:30%;">Ordered Placed</li>
                    <li class="step0 <?php if ($row['orderstatus'] === "Order Confirmed" || $row['orderstatus'] === "Order Handled To Courier Company" || $row['orderstatus'] === "Order Delivered" ) {
                       echo "active";
                    } ?>  text-center" id="step2" style="width:30%;">Ordered Confirmed</li>
                    <li class="step0 <?php if ( $row['orderstatus'] === "Order Handled To Courier Company" || $row['orderstatus'] === "Order Delivered" ) {
                       echo "active";
                    } ?> text-right" id="step3" style="width:18%;">Order Handled To Courier Compnay</li>
                    <li class="step0 <?php if ($row['orderstatus'] === "Order Delivered" ) {
                       echo "active";
                    } ?> text-right" id="step4" style="width:22%;">Delivered</li>
                </ul>
            </div>
            
                   <?php } ?>
            <div class="footer">
                <div class="row">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/YBWc55P.png"></div>
                    <div class="col-10">Want any help? Please &nbsp;<a> contact us</a></div>
                </div>
                
               
            </div>
        </div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                              	<?php include 'includes/footer.php'; ?>

                                </body>
                            </html>