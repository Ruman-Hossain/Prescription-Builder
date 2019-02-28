<?php
	include('model/class_db_operations.php');
    include('include/header.php');
    error_reporting(0);
?>
<!-- <center><button onclick="printDiv('printable-area')" id="print_btn" align="center" style="padding:5px 15px; font-weight:bold">Print</button></center> -->
    <center>
        <input type="button" onclick="printDiv('printableArea')" value="Print" />
    </center>

        <div id="printableArea" style="width:1123px; height:794px;margin:5px;color:white;align:center;">
            <div style="width:794px;background-color:blue;padding-left: 15px;">
                <h2 align="center">Popular Diagnostic Centre Rangpur</h2>
            </div>
            <div style="height:150px; width:794px;margin-bottom:5px;">
                <div style=" height:150px; width:260px; float:left;background-color:green;margin-right:2px; padding: 15px; ">
                        <?php db_operations::show_profile(); ?>
                </div>
                <div style=" height:150px; width:270px; float:left;background-color:blue; margin-right:2px; padding: 15px;"></div>
                <div style="height:150px; width:260px; float:left;background-color:red;padding: 10px 5px;">
                    <?php db_operations::show_address(); ?>
                </div>
            </div>
            <div style="height:55px;width:794px;background-color:green;margin-bottom:5px; padding: 10px 15px;">
                <?php db_operations::show_patient_info(); ?>
            </div>
            <div style="height:25px;width:794px;background-color:yellow;margin-bottom:5px;padding-left: 25px;">
                <img src="img/prescription.png" alt="Rx" width="35px"/>
            </div>
            <div style="height:717px;width:794px;margin-bottom:5px;">
                <div style="height:723px;width:195px;clear:both; float:left;margin-right:5px; overflow: hidden;">
                    <div style="height:230px;width:195px;background-color:red;margin-bottom:5px;padding: 15px; overflow: hidden;">
                        <h4><u>C/C</u></h4>
                        <p><?php db_operations::show_c_c(); ?></p>
                    </div>
                    <div style="height:230px;width:195px;background-color:blue;margin-bottom:5px;padding: 15px; overflow: hidden;">
                        <h4><u>O/E</u></h4>
                        <p><?php db_operations::show_o_e(); ?></p>
                    </div>
                    <div style="height:231px;width:195px;background-color:yellow;padding: 15px; overflow: hidden;">
                        <h4><u>ADV</u></h4>
                        <p><?php db_operations::show_adv(); ?></p>
                    </div>
                </div>
                <div style="height:702px;width:594px;background-color:green;padding: 15px; float:left; overflow: hidden;">
                    <table border="0" width="100%" cellpadding="2px" cellspacing="2px">
                       <tr>
                           <th><u>SL</u></th>
                           <th><u>Medicine</u> </th>
                           <th><u>Instruction</u></th>
                           <th><u>Period</u></th>
                           <th><u>Remark</u></th>
                       </tr>
                       <tr><td colspan="5"><hr/></td></tr>
                          <?php db_operations::show_medicine(); ?>
                    </table>
                </div>
            </div>
            <div style="height:50px;width:794px; clear:both;overflow: hidden;">
                <div style="width:395px;height:53px;background-color:magenta; margin-right:5px;padding: 15px; float:left;">Next Appointment Date :
                    <?php db_operations::show_appointment_date(); ?>
                </div>
                <div style="width:394px;height:50px;background-color:orange; float:right; padding: 15px;">Signature: 
                    <?php  ?>
                </div>
            </div>
        </div>
<?php include('include/footer.php');?>