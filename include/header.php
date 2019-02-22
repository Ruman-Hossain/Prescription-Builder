<?php
ob_start();
session_start();
error_reporting(0);
//require_once('connect.php');
?>
<?php
if(!$_SESSION['id']){
	
	header("Location:/prescription-master/index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
	<title>Prescription Builder</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon.jpg">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/icon.jpg">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <script src="js/jquery-ui-1.10.4.min.js"></script>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	
	

<!--	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>-->
	
	
	
	


	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>	 
	<script src="js/bootstrap.js"></script>
	
<style>
    .active + .collapse {display:block!important;}
</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="prescribe.php"><h3>Prescribe </h3><!--<img style="height:55px;" src="assets/img/race-logo.jpg" alt="Race Diagnostic Centre Logo" class="img-responsive logo">--></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>

				<div id="navbar-menu"> 
					<ul class="nav navbar-nav navbar-right">
                  
						<li class="dropdown">
							<a href="#log" class="dropdown-toggle" data-toggle="dropdown">
							<i class="lnr lnr-user">&nbsp;<?php echo $_SESSION['name'];?></i> 
							<span>
                         


							</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								<li><a href="editprofile.php"><i class="lnr lnr-exit"></i> <span>Edit Profile</span></a></li>
								<li><a href="change_pass.php"><i class="lnr lnr-exit"></i> <span>change password</span></a></li>
								<li><a href="change_username.php"><i class="lnr lnr-exit"></i> <span>change username</span></a></li>
								<li><a href="add_medicine.php"><i class="lnr lnr-exit"></i> <span>Add medicine</span></a></li>
								<li><a href="add_test.php"><i class="lnr lnr-exit"></i> <span>Add test</span></a></li>
								<li><a href="add_quantity.php"><i class="lnr lnr-exit"></i> <span>Add Quantity</span></a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					   <?php
		                if($_SESSION['id'] == '1'){
		                ?>                
		              <!--     <li >
		                      <a <?php if(isset($_GET['active']) && $_GET['active'] == 'dashboard'){ echo 'class="active"';} ?> href="dashboard.php?active=dashboard">
		                          <i class="lnr lnr-home"></i>
		                          <span>Dashboard</span>
		                      </a>
		                  </li> -->
						  <li >
		                      <a  <?php if(isset($_GET['active']) && ($_GET['active'] == 'prescribe')){ echo 'class="active"';} ?> href="prescribe.php?active=prescribe">
		                         <i class="fa fa-medkit"></i>
		                          <!--<i class="fa fa-id-card-o" aria-hidden="true"></i>-->
		                          <span>Make Prescription</span>
		                      </a>
		                  </li>
		                  <li >
		                      <a  <?php if(isset($_GET['active']) && ($_GET['active'] == 'prescription')){ echo 'class="active"';} ?> href="prescription.php?active=prescription">
		                         <i class="fa fa-search"></i>
		                          <!--<i class="fa fa-id-card-o" aria-hidden="true"></i>-->
		                          <span>Search Prescription</span>
		                      </a>
		                  </li>
		                  
		                  <?php
						}
						  ?>
					</ul>
				</nav>
			</div>
		</div>


<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid"> 