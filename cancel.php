<?php
	include('include/header.php');

	if($_SESSION['id']==1){
		
		header("location:/prescription/prescribe.php");
		
	}
	else{
		header("location:/prescription/index.php");
	}





?>

<?php
	include('include/footer.php');
?>