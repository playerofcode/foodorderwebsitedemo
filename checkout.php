<?php include "header.php";
$grand_total=0;
	$allItems='';
	$items = array();
	$sql="select CONCAT(product_name, '(',qty,')') AS ItemQty, total_price from cart";
	$fire=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($fire))
	{
		$grand_total +=$row['total_price'];
		$items[]=$row['ItemQty'];
	}
	$allItems = implode(", ",$items);
?>
<?php 
if(isset($_SESSION['guest']))
{
	$user=$_SESSION['guest'];
	$profile=mysqli_query($con,"select * from customers where email='$user' order by id desc");
	$profile_data=mysqli_fetch_array($profile);

}
if(@$user==null || @$user="")
{
	echo "<script>alert('Please login to continue!');window.location.href='index.php';</script>";
}

?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/food1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs  bg-success"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread bg-danger">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
		<?php if($grand_total != 0) {?>
          <div class="col-xl-12 ftco-animate" id="order">
		  <div class="col-xl-12">
	          <div class="row mt-6 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
								<p class="d-flex">
		    						<span>Product(s):<?=$allItems;?></span>
		    						<span></span>
		    					</p>
								<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>&#8377;&nbsp;<?= number_format($grand_total,2);?>/-</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>&#8377;&nbsp;0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>&#8377;&nbsp;0.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>&#8377;&nbsp;<?= number_format($grand_total,2);?>/-</span>
		    					</p>
								</div>
								
	          	</div>
	          	
	          </div>
          </div> <!-- .col-md-8 -->
						<form action="" method="post" id="placeOrder" class="billing-form">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
				<form action="" method="post" id="placeOrder">
	          		<div class="col-md-12">
					<input type="hidden" name="products" value="<?= $allItems; ?>" >
					<input type="hidden" name="grand_total" value="<?= $grand_total; ?>" >
	                <div class="form-group">
	                	<label for="firstname">Customer Name</label>
	                  <input type="text" name="name" class="form-control" value="<?= $profile_data[1];?>" required >
	                </div>
	              </div>
                <div class="w-100"></div>
				<div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="phone" class="form-control" value="<?= $profile_data[3];?>" required >
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" name="email" class="form-control" value="<?= $profile_data[2];?>" required>
	                </div>
                </div>
                <div class="w-100"></div>
				<div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Billing Address</label>
	                  <textarea name="address" rows="3" required cols="10"class="form-control"placeholder="Enter Delevery Address" style="resize:none;"></textarea>
	                </div>
		            </div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Select Payment Mode</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="pmode" class="form-control" required>
							<option value="" disabled>-Select Payment Mode-</option>
							<option value="COD" selected>Cash on Delevery</option>
							<option value="netbanking"  disabled>Net Banking</option>
							<option value="cards"  disabled>Debit/Credit Card</option>
						</select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="form-group">
						<input type="submit" name="submit" value="Place Order" class="btn btn-primary py-3 px-4 btn btn-block"/>
					</div>
				</form>
								<?php } else
			{?>
				<div class="text-danger lead">You're redirect to home page...</div>
				<meta http-equiv="refresh" content="2;url=index.php" />
			<?php } ?>
					
		            
					
        </div>
      </div>
    </section> <!-- .section -->

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php include "footer.php"?>