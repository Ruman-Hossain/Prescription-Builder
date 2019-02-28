<?php
require('connect.php');

$sql ="INSERT INTO temp_medicine (medtype,medname,daytimes,instruction,period,periodtype,remark) 
							VALUES (:medtype,:medname,:daytimes,:instruction,:period,:periodtype,:remark)";

for($count = 0; $count<count($_POST['hidden_medtype']); $count++)
{
 $data = array(
  ':medtype' => $_POST['hidden_medtype'][$count],
  ':medname' => $_POST['hidden_medname'][$count],
  ':daytimes' => $_POST['hidden_daytimes'][$count],
  ':instruction' => $_POST['hidden_instruction'][$count],
  ':period' => $_POST['hidden_period'][$count],
  ':periodtype' => $_POST['hidden_periodtype'][$count],
  ':remark' => $_POST['hidden_remark'][$count]
 );
/* $statement = $connect->prepare($query);
 $statement->execute($data);*/

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':medtype',$medtype,PDO::PARAM_STR);
$stmt->bindParam(':medname',$medname,PDO::PARAM_STR);
$stmt->bindParam(':daytimes',$daytimes,PDO::PARAM_STR);
$stmt->bindParam(':instruction',$instruction,PDO::PARAM_STR);
$stmt->bindParam(':period',$period,PDO::PARAM_INT);
$stmt->bindParam(':periodtype',$periodtype,PDO::PARAM_STR);
$stmt->bindParam(':remark',$remark,PDO::PARAM_STR);
$stmt->execute($data);
}

?>
