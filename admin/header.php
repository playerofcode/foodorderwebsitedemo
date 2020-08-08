<?php 
include "../config.php";
session_start();
/*if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
}
if($user==null || $user="")
{
	header("location:index.php");
}*/
?>
<html lang="en">
<head>
  <title>Admin Deshboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
  *{font-family:times new roman;}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Admin Deshboard</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="admin.php">Home</a>
      </li>
	  <?php 
	  if(isset($_SESSION['user']))
	  {
	  ?>
	  <li class="nav-item">
        <a class="nav-link" href="seller.php">Orders<span class="badge badge-danger">
		<?php 
		$fire=mysqli_query($con,"select * from orders");
		 echo $count=mysqli_num_rows($fire);
		?>
		</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="products.php">Products<span class="badge badge-info">
		<?php 
		$fire=mysqli_query($con,"select * from product");
		 echo $count=mysqli_num_rows($fire);
		?>
		</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproduct.php">Add Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
	  <?php } ?>
	  <!--<li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"> <span class="badge badge-danger" id="cart-item"></span></i></a>
      </li>-->
    </ul>
  </div>
</nav>