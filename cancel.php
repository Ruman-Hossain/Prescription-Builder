<?php
	include('include/header.php');

	if($_SESSION['id']==1){
		
		header("location:/prescription-master/prescribe.php");
		
	}
	else{
		header("location:/prescription-master/index.php");
	}





?>

<?php
	include('include/footer.php');
?>