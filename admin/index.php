<?php  include "header.php";?>
<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form method="post" action="action.php">
			<h1 class="text-primary text-center ">Admin Login</h1>
			<div class="form-group">
				<input type="text" name="user" placeholder="Enter Your Email Id"class="form-control"/>
			</div>
			<div class="form-group">
				<input type="password" name="pass" placeholder="Enter Your Password"class="form-control"/>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary"  name="login" value="Login" /> 
			</div>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
<?php include "footer.php" ?>