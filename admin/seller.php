<?php  include "header.php";?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive mt-2">
			<table class="table table-bordered table-striped text-center">
				<thead>
					<tr>
					<td colspan="10">
						<h1 class="text-center text-info m-0">Total Orders</h4>
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
					<th>Update</th>
				</tr>
				</thead>
				<tbody>
				<?php 
				$fire=mysqli_query($con,"select * from orders order by id desc");
				while($row=mysqli_fetch_array($fire)){
					$i=1;
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
					<td>
					<form method="post" action="action.php">
						<input type="hidden" name="id" value="<?php echo $row['id'];?>">
						<button type="submit" class="btn btn-success" name="undelivered"/><i class="fa fa-toggle-off"></i></button>
					</form>
					</td>
					</tr>
				<?php $i++; } ?>
				</tbody>
				</table>
				</div>
		</div>
	</div>
</div>
<?php  include "footer.php";?>