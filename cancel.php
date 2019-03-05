<?php
	include('include/header.php');

	if($_SESSION['id']==1){
		
		header("location:prescribe.php");
		
	}
	else{
		header("location:index.php");
	}





?>

<?php
	include('include/footer.php');
?>