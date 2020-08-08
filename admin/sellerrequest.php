<?php  include "header.php";?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive mt-2">
			<table class="table table-bordered table-striped text-center">
				<thead>
					<tr>
					<td colspan="8">
						<h1 class="text-center text-info m-0">Seller Requests</h4>
					</td>
				</tr>
				<tr>
					<th>Serial No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Password</th>
					<th>Status</th>
					<th>Permission</th>
				</tr>
				</thead>
				<tbody>
				<?php 
				$fire=mysqli_query($con,"select * from sellers where status='block'");
				while($row=mysqli_fetch_array($fire)){
					$i=1;
				?>
					<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['address'];?></td>
					<td><?php echo $row['password'];?></td>
					<td><?php echo $row['status'];?></td>
					<td>
					<form method="post" action="action.php">
						<input type="hidden" name="id" value="<?php echo $row['id'];?>">
						<button type="submit" class="btn btn-success" name="allow"/><i class="fa fa-toggle-on"></i></button>
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