<?php
require_once("model/connect.php");
final class db_operations{
	
	
	//inserting admin for the very first time when first time page will be loaded
	   public static  function insert_admin($name,$pass){
	  // require_once("/connect.php");
	   Global $pdo;
	   $security = "?..H@Si./n/?";
	   
	   $tst = $pdo->prepare("SELECT * FROM admin");
	   $tst->execute();
	   $row = $tst->fetch(PDO::FETCH_ASSOC);
	   
	   if(!$row){
			$pass = md5($pass,PASSWORD_DEFAULT).$security;
			$sql = "INSERT INTO admin(username,password) VALUES(:username,:password)";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':username',$name,PDO::PARAM_STR);
				$stmt->bindParam(':password',$pass,PDO::PARAM_STR);
				
				$stmt->execute();
									
			//$pdo = null;
	   
	   }
	   else{
		   //echo "ase to ";
	   }
   }
	public static function truncate_table(){
		$sql="DELETE * FROM temp_medicine";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	}
    public static function insert_medicine($name,$prep,$company){
		 Global $pdo;
		 
		 $sql = "insert into medicine(medicin_name,med_preparation,company) values(:medicin_name,:med_preparation,:company)";
			    $stmt = $pdo->prepare($sql);
				$stmt->bindParam(':medicin_name',$name,PDO::PARAM_STR);
				$stmt->bindParam(':med_preparation',$prep,PDO::PARAM_STR);
				$stmt->bindParam(':company',$company,PDO::PARAM_STR);
				$stmt->execute();
		
		
	}   
        public static function insert_test($name){
		 Global $pdo;
		 
		 $sql = "insert into test(test_name) values(:test_name)";
			    $stmt = $pdo->prepare($sql);
				$stmt->bindParam(':test_name',$name,PDO::PARAM_STR);
				$stmt->execute();
		
		
	} 
   
                public static function insert_quantity($quantity){
				Global $pdo;
		 
				$sql = "insert into quantity(quantity) values(:quantity)";
			    $stmt = $pdo->prepare($sql);
				$stmt->bindParam(':quantity',$quantity,PDO::PARAM_STR);
				$stmt->execute();
		
		
	} 
				public static function insert_patients($name,$age,$sex,$phone,$date,$mid,$ins_time_id,$period_id,$quantity_id,$c_id,$type){
				Global $pdo;
		 
				$sql = "insert into patients(name,age,sex,phone,date,mid,ins_time_id,period_id,quantity_id,c_id,type) values(:name,:age,:sex,:phone,:date,:mid,:ins_time_id,:period_id,:quantity_id,:c_id,:type)";
			    $stmt = $pdo->prepare($sql);
				$stmt->bindParam(':name',$name,PDO::PARAM_STR);
				$stmt->bindParam(':age',$age,PDO::PARAM_STR);
				$stmt->bindParam(':sex',$sex,PDO::PARAM_STR);
				$stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
				$stmt->bindParam(':date',$date);
				$stmt->bindParam(':mid',$mid,PDO::PARAM_STR);
				$stmt->bindParam(':ins_time_id',$ins_time_id,PDO::PARAM_STR);
				$stmt->bindParam(':period_id',$period_id,PDO::PARAM_STR);
				$stmt->bindParam(':quantity_id',$quantity_id,PDO::PARAM_STR);
				$stmt->bindParam(':c_id',$c_id,PDO::PARAM_STR);
				$stmt->bindParam(':type',$type,PDO::PARAM_STR);
				$stmt->execute();
					
				}
   
				//for storing temporary patient info
			   public static function update_temp_patient_info($patientsl,$patientName,$phone,$sex,$age,$agetype,$nextappointment){

/*                                  echo $patientsl."<br>";
                                  echo $patientName."<br>";
                                  echo $phone."<br>";
                                  echo $sex."<br>";
                                  echo $age."<br>";
                                  echo $agetype."<br>";
                                  echo $nextappointment."<br>";*/
				Global $pdo;
				$sql = "UPDATE  temp_patient SET patientsl =:patientsl, patientName =:patientName,phone=:phone,age=:age,agetype=:agetype,sex=:sex,nextappointment=:nextappointment WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':patientsl',$patientsl,PDO::PARAM_STR);
				$stmt->bindParam(':patientName',$patientName,PDO::PARAM_STR);
				$stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
				$stmt->bindParam(':age',$age,PDO::PARAM_INT);
				$stmt->bindParam(':agetype',$agetype,PDO::PARAM_STR);
				$stmt->bindParam(':sex',$sex,PDO::PARAM_STR);
				$stmt->bindParam(':nextappointment',$nextappointment,PDO::PARAM_STR);
				
				$stmt->execute();
	   
   }
  	 public static function update_temp_test_info($c_c,$o_e,$adv){
				Global $pdo;
	   
				$sql = "UPDATE  temp_test SET c_c =:c_c,o_e=:o_e,adv=:adv WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':c_c',$c_c,PDO::PARAM_STR);
				$stmt->bindParam(':o_e',$o_e,PDO::PARAM_STR);
				$stmt->bindParam(':adv',$adv,PDO::PARAM_STR);
				$stmt->execute();
	   
   }
					
				  public static function update_temp_info($mdcn,$period_id,$quantity_id,$having_time_id,$type){
				  Global $pdo;
	  
	   
				$sql = "UPDATE  temp_info SET test_mdeicin =:test_mdeicin,period_id=:period_id,quantity_id=:quantity_id,having_time_id=:having_time_id,type=:type WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':test_mdeicin',$mdcn,PDO::PARAM_STR);
				$stmt->bindParam(':period_id',$period_id,PDO::PARAM_STR);
				$stmt->bindParam(':quantity_id',$quantity_id,PDO::PARAM_STR);
				$stmt->bindParam(':having_time_id',$having_time_id);
				$stmt->bindParam(':type',$type,PDO::PARAM_STR);
				
				$stmt->execute();
	   
   }
				public static function update_profile($name,$designation,$phone,$mail,$address,$degree,$institution){
				Global $pdo;
	  
	   
				$sql = "UPDATE  doctor_profile SET name =:name,designation=:designation,phone=:phone,mail=:mail,address=:address,degree =:degree,institution=:institution WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':name',$name,PDO::PARAM_STR);
				$stmt->bindParam(':designation',$designation,PDO::PARAM_STR);
				$stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
				$stmt->bindParam(':mail',$mail,PDO::PARAM_STR);
				$stmt->bindParam(':address',$address,PDO::PARAM_STR);
				$stmt->bindParam(':degree',$degree,PDO::PARAM_STR);
				$stmt->bindParam(':institution',$institution,PDO::PARAM_STR);
				$stmt->execute();
					
					
				}	
				public static function update_password($password){
							Global $pdo;
							$security = "?..H@Si./n/?";
	                        $password = md5($password,PASSWORD_DEFAULT).$security;
                       	   
				$sql = "UPDATE  admin SET password =:password  WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
			
				$stmt->bindParam(':password',$password,PDO::PARAM_STR);
				
				$stmt->execute();
					
					
				}
				public static function update_username($username){
				Global $pdo;
				
                       	   
				$sql = "UPDATE  admin SET username =:username  WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
			
				$stmt->bindParam(':username',$username,PDO::PARAM_STR);
				
				$stmt->execute();
					
					
				}
   
							public static function show_temp(){
							Global $pdo;	
								$sql = " select * from temp_patient where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								$name = $obj->name;
								$age= $obj->age;
								$agetype= $obj->agetype;
								$sex= $obj->sex;
								$phone= $obj->phone;
								$date = $obj->date;
								$cc =$obj->cc;
				
								}
								
											    echo"<td colspan='3'>Name : $name </td>
												<td colspan='2'>Age  : $age $agetype</td>
												<td colspan='2'>Sex  : $sex</td>
													</tr>
													<tr>
													<td colspan='5'>phone : $phone </td>
														<td colspan='2'> Date $date</td>
													</tr>";
							}
                            public static function show_patient_info(){
                                Global $pdo;
                                $sql = " select * from temp_patient where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								$patientsl = $obj->patientsl;
								$name = $obj->patientName;
								$age= $obj->age;
								$agetype= $obj->agetype;
								$sex= $obj->sex;
								$phone= $obj->phone;
								$now = new DateTime();
								$date = $now->format('d/m/Y  H:i A');
								}
								
											    echo"
                                                <table width='794px' border='0' cellpadding='5px' cellspacing='0'>
                                                    <tr style='width:794px;'>
                                                        <td colspan='3'>Name : $name </td>
												        <td colspan='2'>Age  : $age $agetype</td>
												        <td colspan='2'>Sex  : $sex</td>
                                                    </tr>
                                                    <tr style='width:794px;'>
                                                        <td colspan='3'>phone : $phone </td>
														<td colspan='2'> Date : $date</td>
														<td colspan='2'> Patient ID : $patientsl</td>
                                                        <td></td>
                                                    </tr>
                                                </table>
                                                ";
                            }
                            public static function show_medicine(){
                            	Global $pdo;
                                $sql = " select * from temp_medicine";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
									$id=$obj->id;
									$medtype=$obj->medtype;
									$medname=$obj->medname;
									$daytimes=$obj->daytimes;
									$instruction=$obj->instruction;
									$period=$obj->period;
									$periodtype=$obj->periodtype;
									$remark=$obj->remark;
									
								
								echo"
									<tr>
				                       <td style='padding-left:2%;'>$id.</td>
				                       <td style='padding-left:2%;'>$medtype - $medname </td>
				                       <td style='padding-left:2%;'>$daytimes-$instruction</td>
				                       <td style='padding-left:2%;'>$period$periodtype</td>
				                       <td style='padding-left:2%;'>$remark</td>
				                   </tr>
								";
								}
                            }
							
							public static function show_c_c(){
								Global $pdo;	
								$sql = " select c_c from temp_test where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								
								$cc =$obj->c_c;}
								echo"$cc";
								
								
							}
							public static function show_o_e(){
								Global $pdo;	
								$sql = " select o_e from temp_test where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								
								$oe =$obj->o_e;}
								echo"$oe";
								
								
							}
							public static function show_adv(){
								Global $pdo;	
								$sql = " select adv from temp_test where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								
								$adv =$obj->adv;}
								echo"$adv";
								
								
							}
							public static function show_appointment_date(){
								Global $pdo;	
								$sql = "select nextappointment from temp_patient where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								$obj = $stmt->fetchObject();
								$date =$obj->nextappointment;
								$dateTime = new DateTime($date, new DateTimeZone('Asia/Kolkata')); 
								echo $dateTime->format("d/m/y  H:i A"); 

							}
							public static function show_temp_info(){
											Global $pdo;	
								$sql = " select * from temp_info where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								$test_mdeicin = $obj->test_mdeicin;
								$period= $obj->period_id;
								$quantity= $obj->quantity_id;
								$hvt= $obj->having_time_id;
							    $type = $obj->type;
								echo"     
                                        <tr align='left'>
                                             <td align='left'>$type &nbsp;&nbsp;</td>
                                             <td align='left'>$test_mdeicin</td>
                                             <td align='left'>$quantity</td>
                                             <td align='left' width='14%'> $period</td>
                                             <td align='left' width='25%'>$hvt</td>
                                        </tr>";
							}
							}
							public static function show_profile(){
								Global $pdo;	
								$sql = " select * from doctor_profile where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								$name = $obj->name;
								$dsgntn= $obj->designation;
								$contact = $obj->phone;
								$mail = $obj->mail;
								$address = $obj->address;
								$degree =  $obj->degree;
								$institution =  $obj->institution;
								
								
							}
							echo"
                                    <table border='0' cellpadding='0' cellspacing='0'>
                                        <tr>
                                            <td>$name</td>
                                        </tr>
                                        <tr>
                                            <td>$degree</td>
                                        </tr>
                                        <tr>
                                            <td>designation:$dsgntn</td>
                                        </tr>
                                        <tr>
                                            <td>$institution</td>
                                        </tr>
                                        <tr>
                                            <td>Phone : $contact</td>
                                        </tr>
                                        <tr>
                                            <td>Email : $mail</td>
                                        </tr>

                                    </table>
                                        ";
                            }
                            public static function show_address(){
								Global $pdo;	
								$sql = " select address from doctor_profile where id = 1";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
                                $obj = $stmt->fetchObject();
								$address = $obj->address;
							echo"
                                    <table border='0' cellpadding='0' cellspacing='0'>
                                        <tr>
                                            <td><u>Chamber Address : </u></td>
                                        </tr>
                                        <tr>
                                            <td><address>$address</address></td>
                                        </tr>

                                    </table>
                                        ";
                            }
                     
							public static function show_full_temp(){
								Global $pdo;	
								$sql = "select * from temp_patient inner join temp_info on temp_patient.id = temp_info.id";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								$name = $obj->name;
								$age= $obj->age;
								$agetype = $obj->agetype;
								$sex = $obj->sex;
								$phone = $obj->phone;
								$date = $obj->date;
								$cc = $obj->cc;
								$medicine = $obj->test_mdeicin;
								$period = $obj->period_id;
								$quantity = $obj->quantity_id;
								$ins_time_id = $obj->having_time_id;
								$type = $obj->type;
								
								}
								
								$fage = $age." ".$agetype;
								 
								db_operations::insert_patients($name,$fage,$sex,$phone,$date,$medicine,$ins_time_id,$period,$quantity,$cc,$type);
								
								
								
							}
							
							
							
							
							public static function show_period(){
								Global $pdo;	
								$sql = " select * from period";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								$pid = $obj->id;
								$period= $obj->period;
							 
									echo"						  
									<option value = $period  >  $period</option>";
								
								
								
								
								
							}
	
}

								public static function show_quantity(){
								Global $pdo;	
								$sql = " select * from quantity";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								$qid = $obj->id;
								$quantity= $obj->quantity;
							 
									echo"						  
									<option value = $quantity  >  $quantity</option>";
								
								
								
								
								
							}
	
}

								public static function show_having(){
								Global $pdo;	
								$sql = " select * from having_time";
								$stmt = $pdo->prepare($sql);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								$hid = $obj->id;
								$hvt= $obj->having_time;
							 
									echo"						  
									<option value = $hvt  >  $hvt</option>";
								
								
								
								
								
							}
	
}


}




?>