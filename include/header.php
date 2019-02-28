<?php
ob_start();
session_start();
error_reporting(0);
//require_once('connect.php');
?>
<?php
if(!$_SESSION['id']){
	
	header("Location:/prescription/index.php");
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
<script type="text/javascript">
function addField (argument) {
            var myTable = document.getElementById("medTable");
            var currentIndex = myTable.rows.length;
            var currentRow = myTable.insertRow(-1);


            var sl = document.createElement("input");
            sl.setAttribute("type","button");
            sl.setAttribute("name", "sl" + currentIndex);
            sl.setAttribute("value","Remove");
            sl.setAttribute("class","input-control btn btn-danger");
            sl.setAttribute("style","width:100%;");
            sl.setAttribute("id","sl"+currentIndex);

            var medtype = document.createElement("input");
            medtype.setAttribute("type","text");
            medtype.setAttribute("name", "medtype" + currentIndex);
            medtype.setAttribute("class","input-control");
            medtype.setAttribute("placeholder","Ex:Syrap/Tablet/Injection/Capsule");
            medtype.setAttribute("autocomplete","off");
            medtype.setAttribute("style","width:100%;");
            medtype.setAttribute("id","medtype"+currentIndex);

            var medname = document.createElement("input");
            medname.setAttribute("type","text");
            medname.setAttribute("name", "medname" + currentIndex);
            medname.setAttribute("class","input-control");
            medname.setAttribute("placeholder","Enter Medicine Name");
            medname.setAttribute("autocomplete","off");
            medname.setAttribute("style","width:100%;");
            medname.setAttribute("id","medname"+currentIndex);

            var daytimes = document.createElement("input");
            daytimes.setAttribute("type","text");
            daytimes.setAttribute("name", "daytimes" + currentIndex);
            daytimes.setAttribute("class","input-control");
            daytimes.setAttribute("placeholder","Ex:1+1+1");
            daytimes.setAttribute("autocomplete","off");
            daytimes.setAttribute("style","width:100%;");
            daytimes.setAttribute("id","daytimes"+currentIndex);

            var instruction = document.createElement("input");
            instruction.setAttribute("type","text");
			instruction.setAttribute("name", "instruction" + currentIndex);
			instruction.setAttribute("class","input-control");
			instruction.setAttribute("placeholder","Ex:Before/After Eating");
			instruction.setAttribute("autocomplete","off");
			instruction.setAttribute("style","width:100%;");
			instruction.setAttribute("id","instruction"+currentIndex);

            var period = document.createElement("input");
            period.setAttribute("type","text");
			period.setAttribute("name", "period" + currentIndex);
			period.setAttribute("class","input-control");
			period.setAttribute("placeholder","Ex:30");
			period.setAttribute("autocomplete","off");
			period.setAttribute("style","width:100%;");
			period.setAttribute("id","period"+currentIndex);

            var periodType = document.createElement("input");
            periodType.setAttribute("type","text");
			periodType.setAttribute("name", "periodtype" + currentIndex);
			periodType.setAttribute("class","input-control");
			periodType.setAttribute("placeholder","Day/Month/Year/Continuous");
			periodType.setAttribute("autocomplete","off");
			periodType.setAttribute("style","width:100%;");
			periodType.setAttribute("id","periodtype"+currentIndex);

            var remark = document.createElement("input");
            remark.setAttribute("type","text");
			remark.setAttribute("name", "remark" + currentIndex);
			remark.setAttribute("class","input-control");
			remark.setAttribute("placeholder","Ex:If There's Headache Problem");
			remark.setAttribute("autocomplete","off");
			remark.setAttribute("style","width:100%;");
			remark.setAttribute("id","remark"+currentIndex);



            var currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(sl);

            var currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(medtype);

            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(medname);

            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(daytimes);

            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(instruction);

            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(period);

            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(periodType);

            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(remark);
 }



 	  $('#action_alert').dialog({
		  autoOpen:false
		});

	 $(document).ready(function(){ 
		 	$('#confirm').click(function(){
		  	   	var count_data = 0;
		        $('.medtype').each(function(){
		        	count_data = count_data + 1;
		         });
			  if(count_data > 0){
			  	var form_data = $(this).serialize();
			    $.ajax({
				    url:"insert.php",
				    method:"POST",
				    data:form_data,
				    success:function(data){
					     $('#medTable').find("tr:gt(0)").remove();
					     $('#action_alert').html('<p>Data Inserted Successfully</p>');
					     $('#action_alert').dialog('open');
					    
				    }
			   })
			  }
		  else{
		   $('#action_alert').html('<p>Please Add atleast one data</p>');
		   $('#action_alert').dialog('open');
		  }
	 });
 });
</script>
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