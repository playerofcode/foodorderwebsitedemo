<?php include "header.php" ?>
<div class="hero-wrap hero-bread" style="background-image: url('images/food1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs bg-success"><span class="mr-2"><a href="index.html">Home</a></span> <span>Sign Up</span></p>
            <h1 class="mb-0 bread bg-danger">Sign Up</h1>
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
			<h1 class="text-primary text-center ">Customer Sign Up Form</h1>
			<div class="form-group">
				<input type="text" name="name" placeholder="Enter Your Name" class="form-control"/>
			</div>
			<div class="form-group">
				<input type="email" name="email" placeholder="Enter Your email" class="form-control"/>
			</div>
			<div class="form-group">
				<input type="tel" name="mob" placeholder="Enter Your Mobile No" class="form-control"/>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Enter Your Password"class="form-control"/>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary"  name="signup" value="Sign Up" /> 
				<a href="login.php" class="text-danger">Already a customer account?</a>
			</div>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
</section>
<?php 
if(isset($_POST['signup']))
{
	extract($_POST);
	$q=mysqli_query($con,"insert into customers (name,email,mob,password) values('$name','$email','$mob','$password')");
	if($q)
	{
		echo "<script>alert('Successfully registered to StrangerZone!');window.location.href='login.php';</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong!');window.location.href='register.php';</script>";
	}
}
?>
<?php include "footer.php";?>