<?php
@ob_start();
session_start();

include ('includes/config.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

	$query="SELECT username FROM `users` WHERE `username` = ? AND `password` = ? ";
	$stmt = $mysqli->prepare($query);
	$stmt->bind_param("ss",$username,$password);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($username);

	while($stmt->fetch()) 
	{
		$_SESSION['username'] =$username;
		$_SESSION['user_type'] =$usertype;
		header('Location: viewexpenses.php');
	}
			
	$stmt->close();

	$emsg = "Invalid Username or Password";
}

?>

<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.php'); ?>
</head>
<body>
	<div class="wrap">
		<?php include('includes/menu.php'); ?>
		<section id="main">
			<div class="content">
				<div class="login-page">
					<div class="dreamcrub">
						<div class="account_grid">
							<div class="col-md-6 login-right">

								<h3>LOGIN</h3>

								<p>If you have an account with us, please log in.</p>

								<form method="post" class="form form-vertical"
									id="register-form" method="post" onSubmit="loadVal();">

									<span style="color: red;"> <?php echo isset($emsg)?$emsg:'';?> </span>

									<div>
										<span>User Name</span> <input type="text" name="username"
											id="username" required>
									</div>
									<div>
										<span>Password</span> <input type="password" name="password"
											id="password" required>
									</div>
									<input type="submit" name="submit" value="Login">
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<?php include('includes/footer.php'); ?>
		</section>
	</div>
</body>
</html>