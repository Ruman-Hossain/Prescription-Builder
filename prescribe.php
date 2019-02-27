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
<!--         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="margin:0;padding:0;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:2px">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="input-control" placeholder="Patient Name" id="patientName" style="color:#000" name="patientName" value="" autoComplete="off">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="input-control" placeholder="Phone Number" id="mobile" style="color:#000" name="mobile" value="" autoComplete="off">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12" style="margin-bottom:2px">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
                        <input type="text" style="width:70%;" class="input-control" placeholder="Enter Medicine Name" id="enterMedicine" value="" autoComplete="off">
                        <span class="input-control">
                            <select name="medType" id="medType" class="input-control" style="padding:4px 4px; margin: 4px 0px; width:28%; ">
                                <option value="Tablet">Tablet</option>
                                <option value="Capsule">Capsule</option>
                                <option value="Syrap">Syrap</option>
                                <option value="Injection">Injection</option>
                            </select>
                        </span>
                    </div>
                </div>
            </div>
        </div>
 -->

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

                                                        <input type="text" class="input-control" style="width: 50%; text-align: center; padding: 4px 0px; height:30px !important;;" placeholder="Age" id="age_" name="age_" autoComplete="off" value="">


                                                        <select name="ageType_" id="ageType_" class="input-control" style="padding: 4px 0px;margin: 0; width: 48%;">
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
                                                        <textarea type="text" class="input-control" placeholder="C/C Goes Here..." name="cc_" id="c_c" autoComplete="off" value=""></textarea>
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


            <div class="col-lg-12  " style="margin:0;padding:0;">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left" style="color:#333; font-weight:bold">
                                Prescribed Medicines
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                                <div class="form">
                                    <table id="medTable" border="0" align="center" width="100%" style="color:#333">
                                        <tr>
                                           <!-- <td width="4%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double">&times;</td> -->
                                            <td width="5%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double">Sl No.</td>
                                            <td width="10%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double">Type</td>
                                            <td width="26%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double">Medicine Name</td>
                                            <td width="10%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double">Day Times</td>
                                            <td width="10%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double">Instruction</td>
                                            <td width="10%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double">Period</td>
                                            <td width="10%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double">Period Type</td>
                                            <td width="25%" align="center" style="font-weight:bold; padding:2px; border-bottom:4px double;">Remarks</td>
                                        </tr>

                                        <!-- <tr>
                                            <td width="4%" align="center" style="padding:2px; border-bottom:1px solid"><a onclick="return removeOne('')" href="#" class="removebtn">&times;</a></td>
                                            <td width="5%" align="center" style="padding:2px; border-bottom:1px solid"></td>
                                            <td width="10%" align="center" style="padding:2px; border-bottom:1px solid">
                                                <select name="medType" id="medType" class="input-control" style="padding:4px 4px; margin:0; width:80%; ">
                                                    <option value="Tablet">Tablet</option>
                                                    <option value="Capsule">Capsule</option>
                                                    <option value="Syrap">Syrap</option>
                                                    <option value="Injection">Injection</option>
                                                </select>
                                            </td>
                                            <td width="26%" align="center" width="55%" style="padding:2px; border-bottom:1px solid">
                                                <input type="text" style="width:100%;" class="input-control" placeholder="Enter Medicine Name" id="enterMedicine" value="" autoComplete="off">
                                            </td>
                                            <td width="10%" align="center" style="padding:2px; border-bottom:1px solid">
                                                <input type="text" style="width:100%; text-align: center; padding: 3px" name="" id="" class="input-control " value="">
                                            </td>
                                            <td width="10%" align="center" style="padding:2px; border-bottom:1px solid">
                                                <select name="instruction" id="instruction" class="input-control" style="padding:3px 0px;margin: 0; width: 100%;">
                                                    <option value="beforeEating">Before Eating</option>
                                                    <option value="afterEating">After Eating</option>
                                                </select>
                                            </td>
                                            <td width="10%" align="center" style="padding:2px; border-bottom:1px solid">
                                                <input type="text" style="width:38%; text-align: center; padding: 3px" name="" id="" class="input-control " value="">
                                                <select name="periodFormat" id="periodFormat" class="input-control" style="padding: 4px 0px;margin: 0; width: 50%;">
                                                    <option value="days">Days</option>
                                                    <option value="months">Months</option>
                                                    <option value="years">Years</option>
                                                    <option value="continuous">Continuous</option>
                                                </select>
                                            </td>

                                            <td width="25%" align="center" style="padding:2px; border-bottom:1px solid">
                                                <input type="text" style="width:100%; text-align: center; padding: 3px" name="" id="" class="input-control ">
                                            </td>
                                        </tr> -->

                                    </table>
                                    <div class="col-lg-12" style="padding-top:20px; margin-top:10px;" align="center">
                                        <button class="btn btn-success" onclick="addField();">Add A New Medicine Row</button>
                                    </div>
                                </div>
                            </div><br>

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="input-group" style="display:block;box-shadow:none; margin-bottom:10px;">
                                <span class="" style="width:20%; margin:5px; text-align: center; float:left;"><b>Next Appointment Date</b></span>
                                <input type="datetime-local" style="margin:0;width:30%; float:left;" name="next_appointment" id="next_appointment">
                            </div>

                            <div class="col-lg-12" style="padding-top:20px; margin-top:10px;" align="center">
                                <input type="button" class="btn btn-danger" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Confirm">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Tab left inner -->
            </div>

    </section>
</section>

<?php
require_once('include/footer.php');

?>