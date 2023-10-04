<?php 
 include 'includes/session.php';

$buyername = $_POST['fname'];
$buyermobile = $_POST['mobile'];
$postal = $_POST['postal'];
$deliverycountry = $_POST['country'];
$deliverystate = $_POST['state'];
$deliveryaddress = $_POST['address'];
$deliverycity = $_POST['city'];
$deliverytype = "cash on delivery";
$payid = "COD-" . $_SESSION['user'].time().uniqid(mt_rand(),true);
header("Location: sales.php?buyername=$buyername&buyermobile=$buyermobile&postal=$postal&deliverycountry=$deliverycountry&deliverystate=$deliverystate&deliveryaddress=$deliveryaddress&deliverycity=$deliverycity&deliverytype=$deliverytype&pay=$payid");

?>