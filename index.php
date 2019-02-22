<?php
ob_start();
session_start();
require_once('/model/connect.php');
require_once('/controller/admin_check.php');
require_once('needed.php');
//require_once('test.php');

?>
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Prescription builder</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/race-icon.jpg">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/race-icon.jpg">
</head>

<body>
 
         			<?php
			
			if(isset($_POST['login'])){
				
				$name = $_POST['admin'];
				$pass = $_POST['password'];
				
				check_admin::admin_check($name,$pass);
			}
			
		
		?>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><span style="color:#ea6d12;">Prescription Builder</span><!--<img style="width:100%;" src="assets/img/race-logo.jpg" alt="Race Diagnostic Centre">--></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="index.php" method="post">

								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="admin" id="signin-email" required >
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="password" placeholder="Password" required >
								</div>
								
								<button type="submit" name="login" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Dr. Ashraful Islam</h1>
							<h2 class="heading">MBBS,FCPS</h2>
							<p>Dhap, Jail Road,Rangpur.</p>
							<p>Contact: 017000001458</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>

