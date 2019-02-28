<?php
ob_start();
require_once('include/header.php');
//require_once('connect.php');
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <ol class="breadcrumb">
                <li><i class="fa fa-angle-double-right"></i><a href="prescribe.php">&nbsp; Home</a></li>
                <li style="color:#1a1a1a;">
                    <?php 
                            $active = explode("_",$_GET['active']);
							
							foreach($active as $name){
								echo ucfirst($name);
								echo " ";
							}
                        ?>
                </li>
            </ol>
        </div>
        <div id="demotab" class="tab-content ">

            <div id="" class="tab-pane  " style="display:block;">
                <!-- Start Tab left inner -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left" style="color:#333; font-weight:bold">
                                Patient Information
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">

                                <div class="form">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:2px">
                                        <div class="form-group">
                                            <div class="row">
                                                <input type="hidden" name="invoiceType_" id="invoiceType_" value="">
                                                <div class="row-div">
                                                    <p>
                                                        <span>Name of Patient: </span>
                                                        <input type="text" class="input-control" placeholder="Patient Name" id="patientName" style="color:#000" name="patientName" value="" autoComplete="off">
                                                    </p>

                                                    <p>
                                                        <span>Sex : </span>
                                                        <label>
                                                            <input type="radio" name="sex_" id="male" value="Male">
                                                            Male


                                                            <input type="radio" name="sex_" id="female" value="Female">
                                                            Female


                                                            <input type="radio" name="sex_" id="others" value="Others">
                                                            Others

                                                        </label>
                                                    </p>
                                                    <p>
                                                        <span style="">Age :</span>

                                                        <input type="text" class="input-control" style="width: 50%; text-align: center; padding: 4px 0px; height:30px !important;;" placeholder="Age" id="age" name="age" autoComplete="off" value="">


                                                        <select name="agetype_" id="agetype_" class="input-control" style="padding: 4px 0px;margin: 0; width: 48%;">
                                                            <option value="Years">Years</option>
                                                            <option value="Months">Months</option>
                                                            <option value="Days">Days</option>
                                                        </select>

                                                    </p>
                                                    <p>
                                                        <span>Contact No:</span>
                                                        <input type="text" class="input-control" placeholder="Phone Number" id="mobile" style="color:#000" name="mobile" value="" autoComplete="off">
                                                    </p>
                                                </div>
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 7px">
                                                        <span class="input-group-addon">C/C</i></span>
                                                        <textarea type="text" class="input-control" placeholder="C/C Goes Here..." name="c_c" id="c_c" autoComplete="off" value=""></textarea>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <span class="input-group-addon">O/E</i></span>
                                                        <textarea type="text" class="input-control" placeholder="O/E Goes Here..." name="o_e" id="o_e" autoComplete="off" value=""></textarea>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 7px">
                                                        <span class="input-group-addon">ADV</i></span>
                                                        <textarea type="text" class="input-control" placeholder="ADV Goes Here..." name="adv" id="adv" autoComplete="off" value=""></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div align="right" style="margin-bottom:5px;">
                    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
                </div>
                <br />
                <form method="post" id="user_form">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="user_data">
                            <tr>
                                <td><b>Type</b></td>
                                <td><b>Medicine Name</b></td>
                                <td><b>Day Times</b></td>
                                <td><b>Instruction</b></td>
                                <td><b>Period</b></td>
                                <td><b>Period Type</b></td>
                                <td><b>Remarks</b></td>
                                <td><b>View</b></td>
                                <td><b>Remove</b></td>
                            </tr>
                        </table>
                    </div>
                   <!--  <div align="center">
                        <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
                    </div> -->
                </form>

                <br />
            </div>
            <div id="user_dialog" title="Add Data">
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="medtype" id="medtype" class="form-control" />
                    <span id="error_medtype" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="medname" id="medname" class="form-control" />
                    <span id="error_medname" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Day Times</label>
                    <input type="text" name="daytimes" id="daytimes" class="form-control" />
                    <span id="error_daytimes" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Instruction</label>
                    <input type="text" name="instruction" id="instruction" class="form-control" />
                    <span id="error_instruction" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Period</label>
                    <input type="text" name="period" id="period" class="form-control" />
                    <span id="error_period" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Period Type</label>
                    <input type="text" name="periodtype" id="periodtype" class="form-control" />
                    <span id="error_periodtype" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Remark</label>
                    <input type="text" name="remark" id="remark" class="form-control" />
                    <span id="error_remark" class="text-danger"></span>
                </div>

                <div class="form-group" align="center">
                    <input type="hidden" name="row_id" id="hidden_row_id" />
                    <button type="button" name="save" id="save" class="btn btn-info">Save</button>
                </div>
            </div>
            <div id="action_alert" title="Action">

            </div>
            <div class="col-lg-12  " style="margin:0;padding:0;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="input-group" style="display:block;box-shadow:none; margin-bottom:10px;">
                            <span class="" style="width:20%; margin:5px; text-align: center; float:left;"><b>Next Appointment Date</b></span>
                            <input type="datetime-local" style="margin:0;width:30%; float:left;" name="nextappointment" id="nextappointment">
                        </div>

                        <div class="col-lg-12" style="padding-top:20px; margin-top:10px;" align="center">
                            <input type="submit" class="btn btn-danger" id="cancel" name="cancel" value="Cancel">
                            <input type="submit" class="btn btn-primary" id="confirm" name="confirm" value="Confirm">
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Tab left inner -->
        </div>
        </div>
        <div id="action_alert" title="Action"></div>
    </section>
</section>
<?php
		include("Model/class_db_operations.php");
		include("Controller/check.php");
			

		
		//echo $id;
			
				if(isset($_POST['confirm'])){

				
				
					
									
						//$filepath = check_input::test_img("roomimage",$loc);			
				    db_operations::update_temp_patient($_POST['patientName'],$_POST['phone'],$_POST['age'],$_POST['agetype'],$_POST['sex'],$_POST['nextappointment']);
                    db_operations::insert_temp_test($_POST['c_c'],$_POST['o_e'],$_POST['adv']);
				echo "successfully added";
				
				/*
				$flag = true;
				//include("Model/class_operations_data.php");
					if($flag){
								include("Model/class_operations_data.php"); 
							$id = operations::get_id($id);
							$y = "yes";
							operations::update_room_book($id,$y);
					}
					*/
					
				
			
				
				}
			
				
		?>


<?php
require_once('include/footer.php');

?>