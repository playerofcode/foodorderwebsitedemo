<?php 
	include "../config.php";
	if(isset($_POST['login']))
	{
	extract($_POST);
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	 $sql="select id from admin where user ='$user' and pass='$pass'";
	$fire=mysqli_query($con,$sql);
	$data=mysqli_num_rows($fire);
	if($data == 1)
	{	session_start();
		$_SESSION['user'] = $user;
		header("location: admin.php");
	}
	else
	{
		echo "<span style='color:red;'> Your user id/password incorrect.</span>";
	}
	}
	if(isset($_POST['allow']))
	{
		$id=$_POST['id'];
		$sql="update sellers set status='allow' where id='$id'";
		$fire=mysqli_query($con,$sql);
		if($fire)
		{
			echo "<script>alert('Seller Activated successfully!');window.location.href='sellerrequest.php';</script>";
		}
		else
		{
			echo "<script>alert('Seller unable to Activated!');window.location.href='sellerrequest.php';</script>";
		}
	}
	if(isset($_POST['undelivered']))
	{
		$id=$_POST['id'];
		$sql="update orders set status='delivered' where id='$id'";
		$fire=mysqli_query($con,$sql);
		if($fire)
		{
			echo "<script>alert('Product  successfully Delevered!');window.location.href='seller.php';</script>";
		}
		else
		{
			echo "<script>alert('Product unable to Delivered!');window.location.href='seller.php';</script>";
		}
	}
?>