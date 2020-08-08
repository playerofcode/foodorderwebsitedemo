<?php include "header.php";?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/food1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs bg-success"><span class="mr-2"><a href="index.html">Home</a></span> <span>Foods</span></p>
            <h1 class="mb-0 bread bg-danger">Veg Foods</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
    	<div class="container">
		<div id="message" class="mt-2"></div>
  <div class="row mt-2 pb-3">
    		<!--Category wise product filter--
			<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">All</a></li>
    					<li><a href="#">Vegetables</a></li>
    					<li><a href="#">Fruits</a></li>
    					<li><a href="#">Juice</a></li>
    					<li><a href="#">Dried</a></li>
    				</ul>
    			</div>
    		</div>-->
    		<div class="row">
			<?php 
	include "config.php";
	$data=mysqli_query($con,"select * from product");
	while($result=mysqli_fetch_array($data)):
	?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod text-center"><img class="img-fluid" src="image/<?php echo $result['product_image'];?>" style="height: 200px;width: 100%;"alt="" >
    						<!--<span class="status">30%</span>-->
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-5 px-3 text-center">
    						<h3><a href="#"><?php echo $result['product_name'];?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<!--<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>-->
									
		    						<p class="price"><span>&#8377;&nbsp;<?php echo number_format($result['product_price'],2);?></span></p>
		    					
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="javascript:void(0);" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
									<form action="" class="form-submit">
				<input type="hidden" class="pid" value="<?php echo $result['id'];?>">
				<input type="hidden" class="pname" value="<?php echo $result['product_name'];?>">
				<input type="hidden" class="pprice" value="<?php echo $result['product_price'];?>">
				<input type="hidden" class="pimage" value="<?php echo $result['product_image'];?>">
				<input type="hidden" class="pcode" value="<?php echo $result['product_code'];?>">
	    							<a href="javascript:void(0);" class="addItemBtn buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a></form>
	    							<a href="javascript:void(0);" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				<?php endwhile; ?>
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