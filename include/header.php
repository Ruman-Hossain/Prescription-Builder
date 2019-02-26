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
<script>
$(function(){
	var countLIActive = $('li a.t').length;
	if ( $('.displayDetails').children().length > 0 ) {
		$('#demotab').hide();
 
    }
	if(countLIActive > 0){
		var activePN = $('li.active a.t').html();
		var activeM = $('li.active span.m').html();
		$('#patientName').val(activePN);
		if(activeM != '-'){
			$('#mobile').val(activeM);
		}else{
			$('#mobile').val('');
		}
		$('#searchTest').focus();
	}else{
        $('#patientName').val('');
        $('#mobile').val('');
    }
	
	$("#searchTest").typeahead({
		source:function(query, process){
			$('.loading_test').css('display','');
			$.getJSON('search_test.php?query='+query, function(data){
				process(data);
				$('.loading_test').css('display','none');
			});
		},
		updater: function(item){
			var testKey;
			testKey = item.replace('&', '%26');
			var patientName = $('#patientName').val();
			var mobileCheck = $('#mobile').val();
			var mobile;
			if(mobileCheck.length > 0){
				mobile = mobileCheck;
			}else{
				mobile = '-';
			}

			if(patientName.length > 0){
				$('.loading_test').css('display','');
				$.get('cart_process.php?testKey='+testKey+'&patientName='+patientName+'&mobile='+mobile, function(data){
					$('#demotab').hide();
					$('.displayDetails').html(data);
					$('.loading_test').css('display','none');
				});
			}else{
				alert('Patient name must be field out.');
			}
			
		}
	});
	
	$(".discountPerTest").change(function(){
		var value = this.value;
		var id = this.id;
		//alert(value);
		$('.loading_test').css('display','');
		$.get('discount_process.php?id='+id+'&value='+value, function(data){
			$('.displayDetails').html(data);
			$('.loading_test').css('display','none');
		});
	});
	
});

function active(patientName, mobile){
		
	$('#patientName').val(patientName);
	if(mobile != '-'){
		$('#mobile').val(mobile);
	}else{
		$('#mobile').val('');
	}
	$('#enterMedicine').focus();
}

function confirmInvoice(index){

	var sex = $('input[name="sex_'+index+'"]').is(':checked');
	var sexValue = $('input[name="sex_'+index+'"]:checked').val();
	var age = $('input[name="age_'+index+'"]').val();
	var ageType = $('select[name="ageType_'+index+'"]').val();

	if(sex == false){
		alert("Please Select Petient's sex Male or Female or Others");
		return false;
	}

	if(age == ''){
		alert("Please Enter Petient's age");
		return false;
	}
	
	var conf = confirm('Are you sure want to Confirm this?');
	if(conf){
		var c_c = $('input[name="c_c'+index+'"]').val();
		var o_e = $('input[name="o_e'+index+'"]').val();
		var totalDisP = $('input[name="totalDisP_'+index+'"]').val();
		var totalAmount = $('input[name="totalAmount_'+index+'"]').val();
		var discountP = $('input[name="discountP_'+index+'"]').val();
		var discountAmount = $('input[name="discountAmount_'+index+'"]').val();
		var netTotal = $('input[name="netTotal_'+index+'"]').val();
		var payment = $('input[name="payment_'+index+'"]').val();
		var due = $('input[name="due_'+index+'"]').val();
		var totalRefdFee = $('input[name="totalRefdFee_'+index+'"]').val();
		var deli_time = $('textarea[name="deli_time_'+index+'"]').val();

		
		//alert('CN-'+coName+'RN-'+refdName+'TA-'+totalAmount+'DP-'+discountP+'DA-'+discountAmount+'P-'+payment);
		
		
		var myBars = 'directories=no,location=no,menubar=yes,status=no';
		
		myBars += ',titlebar=yes,toolbar=no';
		
		var myOptions = 'scrollbars=no,width=750,height=500,resizeable=no,top=10, left=300,';
		var myFeatures = myBars + ',' + myOptions;
		
		refdName = refdName.replace("&","%26");
		
		var win = window.open('confirm_invoice.php?index='+index+'&sex='+sexValue+'&age='+age+'&ageType='+ageType+'&c_c='+c_c+'&o_e='+o_e+'&totalDisP='+totalDisP+'&totalAmount='+totalAmount+'&discountP='+discountP+'&discountAmount='+discountAmount+'&netTotal='+netTotal+'&payment='+payment+'&due='+due+'&totalRefdFee='+totalRefdFee+'&deli_time='+deli_time, 'myDoc', myFeatures);
		
		var timer = setInterval(function() {   
			if(win.closed) {  
				clearInterval(timer);  
				$.post('remove_cart2.php?index='+index, function(data){
					$('.displayDetails').html(data);
				});	
			}  
		}, 1000); 

		return true;
		
	}else{
		return false;
	}
	

}

function removeOne(index){
	var conf = confirm('Are you sure want to remove this?');
	//alert(index);
	
	if(conf){
		$.post('remove_cart.php?index='+index, function(data){
			$('.displayDetails').html(data);
		});	
		return true;
	}else{
		return false;
	}
}
function cancelInvoice(index){
	var conf = confirm('Are you sure want to cancel this?');
	
	if(conf){
		$.post('remove_cart2.php?index='+index, function(data){
			$('.displayDetails').html(data);
		});	
		return true;
	}else{
		return false;
	}
}


function discountVal(index){

	var setIndex = index.split('/');
	var firstIndex = setIndex[0];
	var secondIndex = setIndex[1];

	var zero = 0;
	var value = document.getElementById('discountAmount_'+index).value;
	var totalAmount = document.getElementById('totalAmount_'+index).value;
	var payment = document.getElementById('payment_'+index).value;

	var dis;
	if(value.length > 0){
		dis = parseFloat(value);
	}else{
		dis = parseFloat(zero);
		document.getElementById('discountAmount_'+index).value = zero.toFixed(2);
		document.getElementById('discountAmount_'+index).select();
	}

	var calDiscountPer = (parseFloat(100) * parseFloat(dis)) / parseFloat(totalAmount);
	var calTotalAmount = parseFloat(totalAmount) - parseFloat(dis);
	calTotalAmount = Math.ceil(calTotalAmount);
	document.getElementById('discountP_'+index).value = calDiscountPer.toFixed(2);
	document.getElementById('netTotal_'+index).value = calTotalAmount.toFixed(2);
	var calDueAmount = calTotalAmount - parseFloat(payment);
	document.getElementById('due_'+index).value = calDueAmount.toFixed(2);


	$.ajax({
		type: 'POST',
		url: 'set_cookie_discount.php',
		data: 'firstIndex='+firstIndex+'&secondIndex='+secondIndex+'&discountP='+calDiscountPer.toFixed(2)+'&discountVal='+dis.toFixed(2),
		success:function(data){
			
		}
	});

}



function function_sex(index, sex){

	var setIndex = index.split('/');
	var firstIndex = setIndex[0];
	var secondIndex = setIndex[1];
	var invoiceType = $('input[name="invoiceType_'+index+'"]').val();
	
	$.ajax({
		type: 'POST',
		url: 'set_cookie_sex.php',
		data: 'firstIndex='+firstIndex+'&secondIndex='+secondIndex+'&sex='+sex+'&invoiceType='+invoiceType,
		success:function(data){

		}
	});
}

function function_age(index, age){

	var setIndex = index.split('/');
	var firstIndex = setIndex[0];
	var secondIndex = setIndex[1];
	var ageType = $('select[name="ageType_'+index+'"]').val();
	
	$.ajax({
		type: 'POST',
		url: 'set_cookie_age.php',
		data: 'firstIndex='+firstIndex+'&secondIndex='+secondIndex+'&age='+age+'&ageType='+ageType,
		success:function(data){

		}
	});
}

function function_ageType(index, ageType){

	var setIndex = index.split('/');
	var firstIndex = setIndex[0];
	var secondIndex = setIndex[1];

	$.ajax({
		type: 'POST',
		url: 'set_cookie_age_type.php',
		data: 'firstIndex='+firstIndex+'&secondIndex='+secondIndex+'&ageType='+ageType,
		success:function(data){

		}
	});

}
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