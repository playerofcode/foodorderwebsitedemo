<?php include "header.php";?>
	<div class="container">
		<div class="row mt-5 text-center">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 bg-warning p-4 rounded">
				<h2 class="text-primary">Add Product</h2>
				<form method="post" action=""  enctype="multipart/form-data">
					<div class="form-group">
						<label>Product Name</label>
						<input type="text" name="product_name" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Product Price</label>
						<input type="text" name="product_price" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Product Image</label>
						<input type="file" name="product_image" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Product Code</label>
						<input type="text" name="product_code" class="form-control"/>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary form-control"/>
					</div>
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
<?php include "footer.php"; 
if(isset($_POST['submit']))
{
	extract($_POST);
	$filephoto=$_FILES['product_image']['name'];
    $file_tmp=$_FILES['product_image']['tmp_name'];
    $location="../image/";
    $ins=mysqli_query($con,"insert into product (product_name,product_price,product_image,product_code) values('$product_name','$product_price','$filephoto','$product_code')");
    move_uploaded_file($file_tmp, $location.$filephoto);
     echo "<script>alert('Product added successfully ');window.location.href='addproduct.php';</script>";
}
?>