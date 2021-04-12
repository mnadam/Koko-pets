<?php 
		include 'koneksi.php';
		//session_start();
		// 	if(isset($_SESSION["sesi_user"]))
		// {
		// 	if($_SESSION['sesi_user'] == '1'){
		// 		header("location:admin/index.php");
		// 	}
		// 	if($_SESSION['sesi_user'] == '0'){
		// 		header("location:index.php");
		// 	}
		
		

		
		// $pass_md5= md5($pass);

		if(isset($_POST['login'])){
			$user = mysqli_real_escape_string($mysqli, $_POST['username']);
			$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
			$level = mysqli_real_escape_string($mysqli, $_POST['combo']);
			//cek apakah username terdaftar atau tidak di tb_admin
			
			
			if($level == "admin"){
				$sql_cek=mysqli_query($mysqli, "SELECT * FROM operator where id_operator='$user' and password='$pass'");
				$cek_admin=mysqli_num_rows($sql_cek);
				if($cek_admin == 0){
				
					echo "<script>alert('Username dan Password Salah !');document.location='login.php'</script>";
				}
				else{
				session_start();
				$_SESSION['sesi_user']=$user;
				//$_SESSION['sesi_level']=$admin;
	
				echo "<script>alert('Welcome Admin !');document.location='admin/index.php'</script>";
			
				 }
			}

			else {
				$sql_cek=mysqli_query($mysqli, "SELECT * FROM pelanggan where id_pelanggan='$user' and password='$pass'");
				$cek_pel=mysqli_num_rows($sql_cek);
				if($cek_pel == 0){
				
					echo "<script>alert('Username dan Password Salah !');document.location='login.php'</script>";
				}
				else{
					
				$_SESSION['sesi_user']=$user;
				// $_SESSION['sesi_level']=$admin;
	
				echo "<script>alert('Welcome Pelanggan !');document.location='index.php'</script>";
			
				 }
			}
			
		   }
		 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login Koko Pets</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="assets/img/ava.svg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">Username</label>
									<input id="email" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Username is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="form-group">
									<label for="email">Level</label>
		   								
												<select class="form-control" name="combo" id="">
													<option value="pelanggan">Pelanggan / Suplier</option>
													<option value="admin">Admin / Operator</option>
												</select>
								
									<div class="invalid-feedback">
										Username is invalid
									</div>
								</div>


								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="login">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="register.html">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; Koko Pets 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
