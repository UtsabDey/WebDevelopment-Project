<?php
include_once("./database/constants.php");
if (isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/dashboard.php");
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
    <link rel="stylesheet" type="text/css" href="./includes/style.css">
    <script type="text/javascript" rel="stylesheet" src="./js/main.js"></script>
</head>
<body>
	<div class="overlay"><div class="loader"></div></div>
	<!-- navbar -->
	<?php include_once("./templates/header.php");?><br><br>

	<div class="container">
		<?php
			if (isset($_GET["msg"]) AND !empty($_GET["msg"])) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <?php echo $_GET["msg"]; ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php
			}
		?>
		<div class="card mx-auto" style="width: 18rem;">
	  		<img class="card-img-top mx-auto" src="./images/login.png" alt="Login Icon">
	  		<div class="card-body">
	   		<form id="form_login" onsubmit="return false">
	  			<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="log_email" id="log_email" placeholder="Enter email">
				    <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  			</div>
				<div class="form-group">
				 	<label for="exampleInputPassword1">Password</label>
				 	<input type="password" class="form-control" name="log_password" id="log_password" placeholder="Password">
				 	<small id="p_error" class="form-text text-muted"></small>
				</div>
	  			<button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
	  			<span><a href="register.php">Register</a></span>
			</form>
	  		</div>
	  		<div class="card-footer"><a href="#">Forget Password</a></div>
		</div>
	</div>

	
</body>
</html>
