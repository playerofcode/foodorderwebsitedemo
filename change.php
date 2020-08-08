<?php
include "config.php";
session_start();
if(isset($_POST['qty']))
	{
		$qty=$_POST['qty'];
		$pid=$_POST['pid'];
		$pprice=$_POST['pprice'];
		$tprice=$qty*$pprice;
		if($qty<1)
		{
		mysqli_query($con,"delete from cart where id='$pid'");
		echo "<script>window.location.href='cart.php';</script>";
		}
		else
		{
		mysqli_query($con,"UPDATE cart SET qty='$qty', total_price='$tprice' WHERE id='$pid'");
		echo "<script>window.location.href='cart.php';</script>";
		}
		//$q=mysqli_query($con,"UPDATE cart SET qty='$qty', total_price='$tprice' WHERE id='$pid'");
		//echo "<script>window.location.href='cart.php';</script>";
	}
?>