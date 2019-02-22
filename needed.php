<?php
require_once("model/class_db_operations.php");
require_once("model/connect.php");

$mysql = mysql_connect("localhost", "root", "");

if(mysql_select_db('prescription', $mysql)){
	
	$stmt = new db_operations();
	$stmt->insert_admin("hasin","hasin");
	//db_operations::insert_am_table("ffff","fffff","fffff","sfjisjis");
	
    echo "";
}else{
    echo "Databse does not exists";
}
?>