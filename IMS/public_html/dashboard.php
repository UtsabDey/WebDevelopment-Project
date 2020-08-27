<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>IMS Sytsem</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script type="text/javascript" rel="stylesheet" src="./js/main.js"></script>
</head>
<body>
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br/><br/>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
			    	<img class="card-img-top mx-auto" style="width:60%" src="./images/user.png" alt="...">
					<div class="card-body">
			    		<h5 class="card-title">Profile Info</h5>
			    		<p class="card-text"><i class="fa fa-user">&nbsp;</i>Atqiah Rahman Reesha</p>
			    		<p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
			    		<p class="card-text">Last Login : xxxx-xx-xx</p>
			    		<a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width:100%;height:100%">
					<h1>Welcome Admin</h1>
					<div class="row">
						<div class="col-md-6">
							<iframe src="http://free.timeanddate.com/clock/i7e18m2e/n1940/szw160/szh160/hoc888/cf100/hncf99/hcw2/fas24/hmc900" frameborder="0" width="160" height="160"></iframe> 
						</div>
						<div class="col-md-6">
							<div class="card">
						    	<div class="card-body">
						        <h5 class="card-title">New Order</h5>
						        <p class="card-text">Here you can make invoices and create new orders</p>
						        <a href="#" class="btn btn-primary">New orders</a>
						    	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p></p>
	<p></p>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
					<h5 class="card-title">Categories</h5>
					<p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
					<a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary"><i class="fa fa-add">&nbsp;</i>Add</a>
					<a href="manage_categories.php" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Manage</a>
					</div>
				</div>
 			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
					<h5 class="card-title">Brands</h5>
					<p class="card-text">Here you can manage your brands and you can add new brands.</p>
					<a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary"><i class="fa fa-add">&nbsp;</i>Add</a>
					<a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Manage</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
					<h5 class="card-title">Products</h5>
					<p class="card-text">Here you can manage your products and you can add new products.</p>
					<a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary"><i class="fa fa-add">&nbsp;</i>Add</a>
					<a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Manage</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	//Category Form
	include_once("./templates/category.php");
	?>
	<?php
	//Brand Form
	include_once("./templates/brand.php");
	?>
	<?php
	//Products Form
	include_once("./templates/products.php");
	?>
</body>
</html>
