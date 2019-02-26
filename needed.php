<?php
require_once("model/class_db_operations.php");
require_once("model/connect.php");

$mysql = mysqli_connect("localhost", "root", "","prescription");

if(mysqli_select_db($mysql,'prescription')){
	
	$stmt = new db_operations();
	$stmt->insert_admin("ruman","ruman");
	//db_operations::insert_am_table("ffff","fffff","fffff","sfjisjis");
	
    echo "";
}else{
    echo "Databse does not exists";
}
?>