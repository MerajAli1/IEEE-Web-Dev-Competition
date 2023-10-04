<?php
	include 'includes/session.php';

	if(isset($_GET['pay'])){
		$payid = $_GET['pay'];
		$date = date('Y-m-d');
		$buyername = $_GET['buyername'];
		$buyermobile = $_GET['buyermobile'];
		$postaladdress = $_GET['postal'];
		$deliverycountry = $_GET['deliverycountry'];
		$deliverycity = $_GET['deliverycity'];
		$deliverystate = $_GET['deliverystate'];
		$deliveryaddress = $_GET['deliveryaddress'];
		$saletype = $_GET['deliverytype'];
		$conn = $pdo->open();

		try{
			
			$stmt = $conn->prepare("INSERT INTO sales (user_id, pay_id, sales_date, buyername, buyermobile, postaladdress, deliverycountry, deliverycity, deliverystate, deliveryaddress, saletype ) VALUES (:user_id, :pay_id, :sales_date,  :buyername, :buyermobile, :postaladdress, :deliverycountry, :deliverycity, :deliverystate, :deliveryaddress, :saletype)");
			$stmt->execute(['user_id'=>$user['id'], 'pay_id'=>$payid, 'sales_date'=>$date, 'buyername'=>$buyername, 'buyermobile'=>$buyermobile, 'postaladdress'=>$postaladdress, 'deliverycountry'=>$deliverycountry, 'deliverycity'=>$deliverycity, 'deliverystate'=>$deliverystate, 'deliveryaddress'=>$deliveryaddress, 'saletype'=>$saletype]);
			$salesid = $conn->lastInsertId();
			
			try{
				$stmt = $conn->prepare("SELECT * FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id=:user_id");
				$stmt->execute(['user_id'=>$user['id']]);

				foreach($stmt as $row){
					$stmt = $conn->prepare("INSERT INTO details (sales_id, product_id, quantity, size) VALUES (:sales_id, :product_id, :quantity, :size)");
					$stmt->execute(['sales_id'=>$salesid, 'product_id'=>$row['product_id'], 'quantity'=>$row['quantity'] , 'size'=>$row['Size']]);
				}

				$stmt = $conn->prepare("DELETE FROM cart WHERE user_id=:user_id");
				$stmt->execute(['user_id'=>$user['id']]);

				$_SESSION['success'] = 'Transaction successful. Thank you.';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
			echo $_SESSION['error'];
		}

		$pdo->close();
	}
	
	header('location: profile.php');
	
?>