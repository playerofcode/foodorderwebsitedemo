<?php  include "header.php";?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/food1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs bg-success"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread  bg-danger">My Cart</h1>
          </div>
        </div>
      </div>
    </div>
<div id="fade" style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert']; }else {echo 'none';}unset($_SESSION['showAlert']);?>"class="alert alert-success alert-dismissible mt-2">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];unset($_SESSION['message']);}?></strong>
		</div>
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th><a href="action.php?clear=all"onclick="return confirm('Are you sure want to clear your cart?');" class="badge badge-lg badge-danger p-2"><span class="icon-trash"></span></a></th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
							<?php 
				require "config.php";
				$query=mysqli_query($con,"select * from cart");
				$grand_total=0;
				$count=mysqli_num_rows($query);
			while($result=mysqli_fetch_array($query)):
				?>
						      <tr class="text-center">
						        <td class="product-remove">
								
								<a onclick="return confirm('Are you sure want to remove this item?');" href="action.php?remove=<?php echo $result['id'];?>"><span class="ion-ios-close"></span></a></td>
						        <input type="hidden" class="pid" value="<?php echo $result['id'];?>">
						        <td class="image-prod"><div class="img" style="background-image:url(image/<?php echo $result['product_image'];?>);"></div></td>
<input type="hidden" class="pprice" value="<?php echo $result['product_price'];?>">
						        <td class="product-name">
						        	<h3><?php echo $result['product_name'];?></h3>
						        </td>
						        
						        <td class="price">&#8377;&nbsp;<?php echo number_format($result['product_price'],2);?></td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="number"name="quantity" class="quantity form-control input-number itemQty" value="<?php echo $result['qty'];?>" min="1">
					          	</div>
					          </td>
						        
						        <td class="total">&#8377;&nbsp;<?php echo number_format($result['total_price'],2);?></td>
						      </tr><!-- END TR-->
						<?php  $grand_total +=$result['total_price']; ?>
					<?php endwhile;?>
					<?php
					if($count<=0)
					{
					?>
					<tr> 
						<td colspan="">There is no Item in your Cart</td>
					</tr>
					<?php } ?>
						      <!--<tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bell Pepper</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="number" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
						      </tr>--><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a onclick="alert('Enter a Valid Coupon');return false" href="" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<!--<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>-->
    			<div class="col-lg-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>&#8377;&nbsp;<?php echo number_format($grand_total,2);?></span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>&#8377;&nbsp;0</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>&#8377;&nbsp;0</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>&#8377;&nbsp;<?php echo number_format($grand_total,2);?></span>
    					</p>
    				</div>
    				<p><a href="checkout.php" class="btn btn-primary py-3 px-4 <?= ($grand_total>1)?"":"disabled";?>">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>

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
    <?php include "footer.php";?>