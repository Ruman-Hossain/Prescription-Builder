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
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="user_form">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-left" style="color:#333; font-weight:bold">
                                    Patient Information
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="padd">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:2px">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="row-div" id="patient">
                                                    <p>
                                                        <span>Name of Patient: </span>
                                                        <input type="text" class="input-control" placeholder="Patient Name" id="patientName" style="color:#000" name="patientName" value="" autoComplete="off" required>
                                                    </p>

                                                    <p>
                                                        <span>Sex : </span>
                                                        <label required>
                                                            <input type="radio" name="sex" id="male" value="Male">
                                                            Male


                                                            <input type="radio" name="sex" id="female" value="Female">
                                                            Female


                                                            <input type="radio" name="sex" id="others" value="Others">
                                                            Others

                                                        </label>
                                                    </p>
                                                    <p>
                                                        <span style="">Age :</span>

                                                        <input type="text" class="input-control" style="width: 50%; text-align: center; padding: 4px 0px; height:30px !important;;" placeholder="Age" id="age" name="age" autoComplete="off" value="" required>


                                                        <select name="agetype" id="agetype" class="input-control" style="padding: 4px 0px;margin: 0; width: 48%;">
                                                            <option value="Years">Years</option>
                                                            <option value="Months">Months</option>
                                                            <option value="Days">Days</option>
                                                        </select>

                                                    </p>
                                                    <p>
                                                        <span>Contact No:</span>
                                                        <input type="text" class="input-control" placeholder="Phone Number" id="phone" style="color:#000" name="phone" value="" autoComplete="off" required>
                                                    </p>
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-left" style="color:#333; font-weight:bold">
                                    Observation and Tests
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 7px">
                                    <span class="input-group-addon" style="background-color:#083603;color:#fff;">C/C</span>
                                    <textarea type="text" class="input-control" placeholder="C/C Goes Here..." name="cc_" id="c_c" autoComplete="off" value="" required></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <span class="input-group-addon" style="background-color:#083603;color:#fff;">O/E</span>
                                    <textarea type="text" class="input-control" placeholder="O/E Goes Here..." name="o_e" id="o_e" autoComplete="off" value="" required></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 7px">
                                    <span class="input-group-addon" style="background-color:#083603;color:#fff;">ADV</span>
                                    <textarea type="text" class="input-control" placeholder="ADV Goes Here..." name="adv" id="adv" autoComplete="off" value="" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-left" style="color:#333; font-weight:bold">
                                    Prescribed Medicines
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="input-group" style="display:block;box-shadow:none; margin-bottom:10px;">
                                    <span class="" style="margin:10px; text-align: center; float:left;"><b>Next Appointment Date</b></span>
                                    <input type="datetime-local" style="margin:0;width:30%; float:left;" name="nextappointment" id="nextappointment" required>
                                </div>
                                <div align="right" style="margin-bottom:5px;">
                                    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
                                </div>
                                <br />
                                <div>
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
                                    <div align="center">
                                        <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Prescribe" />
                                    </div>

                                        <?php
                                        require_once("model/class_db_operations.php");
                                        require_once("controller/check.php");
                                        
                                        
                                        
                                        
                                            if(isset($_POST['insert'])){
                                                if(isset($_POST['patientName'])&& $_POST['phone'] && $_POST['sex'] && $_POST['age'] &&  $_POST['agetype'] && $_POST['nextappointment']){
                                                        $_POST['patientName'] = check_input::test_input($_POST['patientName']);
                                                        $_POST['phone'] = check_input::test_input($_POST['phone']);
                                                        $_POST['sex'] = check_input::test_input($_POST['sex']);
                                                        $_POST['age'] = check_input::test_input($_POST['age']);
                                                        $_POST['agetype'] = check_input::test_input($_POST['agetype']);
                                                        $_POST['nextappointment'] = check_input::test_input($_POST['nextappointment']);
                                                        $_POST['c_c'] = check_input::test_input($_POST['c_c']);
                                                        $_POST['o_e'] = check_input::test_input($_POST['o_e']);
                                                        $_POST['adv'] = check_input::test_input($_POST['adv']);
                                                    db_operations::update_patient_info( $_POST['patientName'], $_POST['phone'], $_POST['sex'], $_POST['age'], $_POST['agetype'], $_POST['nextappointment']);
                                                    db_operations::update_test_info( $_POST['c_c'], $_POST['o_e'], $_POST['adv']);
                                                }
                                                echo 'Failed to Insert Data. Try again';
                                            
                                        
                                        }
                                    
                                        ?>
                                </div>

                                <br />
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>

        <div id="user_dialog" title="Add Data">
            <div class="form-group" style="height:50px;">
                <label style="width:20%;float:left;"><b>Type</b></label>
                <input type="text" name="medtype" id="medtype" placeholder="Tablet/Syrap/Capsule/Injection" style="width:80%;float:right;" class="form-control" />
                <span id="error_medtype" class="text-danger"></span>
            </div>
            <div class="form-group" style="height:50px;">
                <label style="width:20%;float:left;"><b>Name</b></label>
                <input type="text" name="medname" id="medname" placeholder="Ex: Paracitamol 50mg" style="width:80%;float:right;" class="form-control" />
                <span id="error_medname" class="text-danger"></span>
            </div>
            <div class="form-group" style="height:50px;">
                <span style="width:20%;"><b>Day Times</b></span>
                <input type="text" name="daytimes" id="daytimes" placeholder="Ex: 1+0+1" style="width:80%;float:right;" class="form-control" />
                <span id="error_daytimes" class="text-danger"></span>
            </div>
            <div class="form-group" style="height:50px;">
                <span style="width:20%;"><b>Instruction</b></span>
                <input type="text" name="instruction" id="instruction" placeholder="Before/After Eating" style="width:80%;float:right;" class="form-control" />
                <span id="error_instruction" class="text-danger"></span>
            </div>
            <div class="form-group" style="height:50px;">
                <span style="width:20%;"><b>Period</b></span>
                <input type="text" name="period" id="period" placeholder="Ex: 30" style="width:80%;float:right;" class="form-control" />
                <span id="error_period" class="text-danger"></span>
            </div>
            <div class="form-group" style="height:50px;">
                <span style="width:20%;"><b>Period Type</b></span>
                <input type="text" name="periodtype" id="periodtype" placeholder="Days/Months/Years/Continuous" style="width:80%;float:right;" class="form-control" />
                <span id="error_periodtype" class="text-danger"></span>
            </div>
            <div class="form-group" style="height:50px;">
                <span style="width:20%;"><b>Remark</b></span>
                <input type="text" name="remark" id="remark" placeholder="Ex: If Headache Occurs" style="width:80%;float:right;" class="form-control" />
                <span id="error_remark" class="text-danger"></span>
            </div>

            <div class="form-group" align="center">
                <input type="hidden" name="row_id" id="hidden_row_id" />
                <button type="button" name="save" id="save" class="btn btn-info">Save</button>
            </div>
        </div>
        <div id="action_alert" title="Action">

        </div>
    </section>
</section>

<?php
require_once('include/footer.php');

?>