<?php ob_start(); ?>
<?php  
include "header.php";?>
<div class="hero-wrap hero-bread" style="background-image: url('images/food1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs bg-success"><span class="mr-2"><a href="index.html">Home</a></span> <span>Login</span></p>
            <h1 class="mb-0 bread bg-danger">Login</h1>
          </div>
        </div>
      </div>
    </div>
	<section class="ftco-section contact-section bg-light">
<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form method="post" action="">
			<h1 class="text-primary text-center ">Customer Login</h1>
			<div class="form-group">
				<input type="text" name="email" placeholder="Enter Your Email Id"class="form-control"/>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Enter Your Password"class="form-control"/>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary"  name="login" value="Login" /> 
				<a href="register.php" class="text-danger">Not a customer account?</a>
			</div>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
</section>
<?php 
if(isset($_POST['login']))
	{
	extract($_POST);
	$email=$_POST['email'];
	$password=$_POST['password'];
	 $sql="select * from customers where email ='$email' and password='$password'";
	$fire=mysqli_query($con,$sql);
	$data=mysqli_num_rows($fire);
	if($data == 1)
	{	
		$_SESSION['guest'] = $email;
		header("Location: cart.php");
	}
	else
	{
		echo "<span style='color:red;'> Your user id/password incorrect.</span>";
	}
	}
	?>
	<?php include "footer.php";?>
	<?php ob_flush(); ?>