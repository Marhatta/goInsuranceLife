<!DOCTYPE html>

<html>
	<head>
	 <meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>login</title>
		<link rel="stylesheet" href="css/stylelogin.css" text="text/css">
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" text="text/css">
	</head>
	<body>
	
	<div class="container img-responsive">
	<div class="col-md-4"></div>
    	<div class="row">
        	<div class="form_bg">
           	<form method="POST" action="#">
				<center>
					<h2>Login</h2>
					<br>
					<div class="error">
					<?php 
						include('error.php');
					?>
					</div>
				</center>
                <br/>
		<center>
                <div class="form-group1 ">
                <div class="input-group">
                	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="email" class="form-control" name="userid" placeholder="  User id">
					</div>
					<br/>
					<br/>
					<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" class="form-control" name="pwd" placeholder="  Password">
					</div>
				</div>
				</center>
                <br/>
                <div class="align-center">
                <button type="submit" class="btn btn-info" name="login">Login</button>
                    </div>
            </form>
        
	

	</div>
    </div>
</div>
	</body>
</html>
