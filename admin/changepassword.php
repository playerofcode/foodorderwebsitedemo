<?php 
include("header.php");
?>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="main-content">
                  
					<div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Change Password</h4>
                                   
                                </div>
                                <div class="card-body">
                                    <div class="input-states">
                                    <form action="" method="post">
											<div class="form-group has-success">
												<div class="row">
													<label class="col-sm-3 control-label">Enter Your Old Password</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="opass" placeholder="Enter Your Old Password*">
													</div>
                                                </div>
                                            </div>
											<div class="form-group has-success">
												<div class="row">
													<label class="col-sm-3 control-label">Enter Your New Password</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="npass" placeholder="Create New Password*">
													</div>
                                                </div>
                                            </div>
											<div class="form-group has-success">
												<div class="row">
													<label class="col-sm-3 control-label">Confirm Password</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="cpass" placeholder="Confirm Password *">
													</div>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <label class="col-sm-4 control-label"></label>
                                                    <div class="col-sm-4">
                                                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                    
                                                </div>
                                               
											</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
					</div><!-- /# row -->
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

<?php
   if(isset($_POST['submit']))
   {
	   $password=$_REQUEST['opass'];
	   extract($_POST);
	   $sel="select * from customers where password='$password'";
	   $query=mysqli_query($con,$sel);
	   $row=mysqli_fetch_array($query);
	   if($row['password']==$opass)
	   {
		   if($npass==$cpass)
		   {
			   $up=mysqli_query($con,"update customers set password='$npass'");
			   if($up)
			   {
				   echo "<script>alert('Your Password Change Successfully');window.location.href='index.php';</script>";
			   }
		   }
		   else
		   {
			   echo "<script>alert('Password Not Same');</script>";
		   }  
	   }
	   else
	   {
		   echo "<script>alert('Old Password Not Match');</script>";
	   }
   
	   
   }
   include("footer.php");
?>