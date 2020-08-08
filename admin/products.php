<?php include "header.php" ?>
<div class="container">
  <div class="row mt-2 pb-3">
	<?php 
	include "../config.php";
	$data=mysqli_query($con,"select * from product");
	while($result=mysqli_fetch_array($data)):
	?>
	<div class="col-lg-3 col-sm-6 col-md-4 mb-2">
		<div class="card-deck">
			<div class="card p-2 border-secondary mb-2">
				<img src="../image/<?php echo $result['product_image'];?>" class="card-img-top" height="300px">
				<div class="card-body p-1">
					<h4 class="card-title text-center text-info"><?php echo $result['product_name'];?></h4>
					<h5 class="card-text text-center text-danger">&#8377;&nbsp;<?php echo number_format($result['product_price'],2);?>/-</h5>
					<h5 class="card-text text-center text-info">Product Code:&nbsp;<?php echo $result['product_code'];?></h5>
				</div>
				<div class="card-footer">
				<form action="" class="form-submit" method="post">
				<input type="hidden" name="id" value="<?php echo $result['id'];?>">
				<input type="hidden" name="product_image" value="<?php echo $result['product_image'];?>">
				<button type="submit" name="remove" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> &nbsp;Remove</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
  </div>
</div>
<?php include "footer.php" ?>
<?php 
if(isset($_POST['remove']))
{
	$id=$_POST['id'];
	//$product_image=$_POST['product_image'];
	//$location="../image/";
    $del=mysqli_query($con,"delete from product where id='$id'");
    if($del)
    {
       echo "<script>alert('Product Deleted Successfully');window.location.href='products.php';</script>";
    }
}
?>