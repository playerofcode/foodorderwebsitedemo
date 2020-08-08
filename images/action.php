<?php
	session_start();
	include "config.php";
	if(isset($_POST['pid']))
	{
		$pid=$_POST['pid'];
		$pname=$_POST['pname'];
		$pprice=$_POST['pprice'];
		$pimage=$_POST['pimage'];
		$pcode=$_POST['pcode'];
		$pqty=1;
		$query=mysqli_query($con,"select product_code from cart where product_code='$pcode'");
		$data=mysqli_fetch_array($query);
		$code=$data['product_code'];
		if(!$code){
		mysqli_query($con,"insert into cart (product_name,product_price,product_image,qty,total_price,product_code) values('$pname','$pprice','$pimage','$pqty','$pprice','$pcode')");
		echo '<div class="alert alert-success alert-dismissible" id="fade">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Success!</strong>Item added to your cart!.
		</div>';
		}
		else
		{
			echo '<div class="alert alert-danger alert-dismissible" id="fade">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Success!</strong>Item  already added to your cart!.
		</div>';
		}
	}
	if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item')
	{
		$query=mysqli_query($con, "select * from cart");
		$data=mysqli_num_rows($query);
		echo "[".$data."]";
	}
	if(isset($_GET['remove']))
	{
		$id=$_GET['remove'];
		mysqli_query($con,"delete from cart where id='$id'");
		$_SESSION['showAlert']='block';
		$_SESSION['message']='Item removed from the cart';
		header("location: cart.php");
	}
	if(isset($_GET['clear']))
	{
	mysqli_query($con,"delete from cart");
	$_SESSION['showAlert']='block';
	$_SESSION['message']='All Item removed from the cart';
	header("location: cart.php");
	}
	if(isset($_POST['qty']))
	{
		$qty=$_POST['qty'];
		$pid=$_POST['pid'];
		$pprice=$_POST['pprice'];
		$tprice=$qty*$pprice;
		if($qty<1)
		{
		mysqli_query($con,"delete from cart where id='$pid'");
		header("location: cart.php");	
		}
		else
		{
		mysqli_query($con,"UPDATE cart SET qty='$qty', total_price='$tprice' WHERE id='$pid'");
		header("location: cart.php");
		}	
	}
	if(isset($_POST['action']) && isset($_POST['action']) == 'order')
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$products=$_POST['products'];
		$grand_total=$_POST['grand_total'];
		$address=$_POST['address'];
		$pmode=$_POST['pmode'];
		$data='';
		$sql="insert into orders(name,email,phone,address,pmode,products,amount_paid,status) values('$name','$email','$phone','$address','$pmode','$products','$grand_total','Undelivered')";
		$fire=mysqli_query($con,$sql);
		if($fire)
		{
		mysqli_query($con,"delete from cart");
		$data.='<div class="text-center">
		<h1 class="display-4 mt-2 text-danger">Thank You</h1>
		<h2 class="text-success text-center">Your order placed successfully</h2>
		<h4 class="bg-danger text-light rounded p-2">Item Purchased : '.$products.'</h4>
		<h4>Your Name : '.$name.'</h4>
		<h4>Your Email : '.$email.'</h4>
		<h4>Your Phone : '.$phone.'</h4>
		<h4>Total Amount Paid : '.number_format($grand_total,2).'</h4>
		<h4>Payment Mode : '.$pmode.'</h4>
		<button class="btn btn-primary" onclick="window.print()">Print</button>
		<a class="btn btn-danger" href="index.php">Home</a>
				</div>';
		echo $data;
		}
	}
?>













