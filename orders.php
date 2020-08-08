<?php include "header.php"; ?>
 <div class="hero-wrap hero-bread" style="background-image: url('images/food1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs bg-success"><span class="mr-2"><a href="index.php">Home</a></span> <span>Order</span></p>
            <h1 class="mb-0 bread bg-danger">Order</h1>
          </div>
        </div>
      </div>
    </div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive mt-2">
			<table class="table table-bordered text-center">
				<thead>
					<tr>
					<td colspan="10">
						<h1 class="text-center text-info m-0">Your Orders</h4>
					</td>
				</tr>
				<tr>
					<th>Serial No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Payment Mode</th>
					<th>products</th>
					<th>Amount Paid</th>
					<th>Status</th>
				</tr>
				</thead>
				<tbody>
				<?php 
				$customer=$_SESSION['guest'];
				echo "Welcome ".$customer;
				$fire=mysqli_query($con,"select * from orders where email='$customer' order by id desc");
				$i=1;
				while($row=mysqli_fetch_array($fire)){
				?>
					<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['phone'];?></td>
					<td><?php echo $row['address'];?></td>
					<td><?php echo $row['pmode'];?></td>
					<td><?php echo $row['products'];?></td>
					<td><?php echo $row['amount_paid'];?></td>
					<td><?php echo $row['status'];?></i></td>
					</tr>
				<?php $i++; } ?>
				</tbody>
				</table>
				</div>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>