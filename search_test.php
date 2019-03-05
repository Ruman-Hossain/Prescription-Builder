<?php
require_once('model/connect.php');
if(isset($_GET['query'])){
	
	$searchKey = (string)$_GET['query'];
	$query = $mysqli->query("select * from tests where test_name like '%{$searchKey}%'");
	
	$array = array();

	while($rows = $query->fetch_array()){
		$array[] = $rows['test_name'];
	}
	//$array = array('Jahid Hasan', 'Tauhid-ul-sadik');
	
	echo json_encode($array);
	//echo $_POST['query'];
}
?>