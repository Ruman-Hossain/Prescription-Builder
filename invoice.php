<?php
    include('model/class_db_operations.php');
    include('include/header.php');
    error_reporting(0);
?>
<center><button onclick="printDiv('printableArea')" class="btn btn-primary" id="print_btn" align="center" style="padding:5px 15px; font-weight:bold">Print</button></center>
        <div id="printableArea" style="border:double;overflow:hidden;width:1200px; margin:5px;">
            <div style="width:100%;padding-left: 15px;">
                <h2 style="width:100; text-align: center;">Popular Diagnostic Centre Rangpur</h2>
            </div>
            <div style="height:150px; width:100%;margin-bottom:5px;float: left;padding-left: 5%;overflow:hidden;border-bottom:double;">
                <div style=" height:150px; width:30%; float:left;margin-right:2px;  ">
                        <?php db_operations::show_profile(); ?>
                </div>
                <div style=" height:150px;width:35%; float:left; margin-right:2px; ">&nbsp;</div>
                <div style="height:150px; width:30%; float:right;">
                    <?php db_operations::show_address(); ?>
                </div>
            </div>
            <div style="height:55px;width:100%;margin-bottom:15px;float:left; padding-left: 5%;overflow:hidden;">
                <?php db_operations::show_patient_info(); ?>
            </div>
            <div style="height:25px;width:100%;padding-left: 5%;clear:both;float: left;border-bottom:dotted;">
                <img src="img/prescription.png" alt="Rx" width="55px"/>
            </div>
            <div style="height:717px;width:100%;margin-bottom:5px;float: left;">
                <div style="height:723px;width:20%;clear:both; float:left;border-right:dotted; overflow: hidden;">
                    <div style="height:230px;width:100%;margin-bottom:5px;padding: 5%;border-bottom:dotted; overflow: hidden;">
                        <h3><u>C/C</u></h3>
                        <p><?php db_operations::show_c_c(); ?></p>
                    </div>
                    <div style="height:230px;width:100%;margin-bottom:5px;border-bottom:dotted;padding: 5%; overflow: hidden;">
                        <h3><u>O/E</u></h3>
                        <p><?php db_operations::show_o_e(); ?></p>
                    </div>
                    <div style="height:231px;width:100%;padding: 5%;overflow: hidden;">
                        <h3><u>ADV</u></h3>
                        <p><?php db_operations::show_adv(); ?></p>
                    </div>
                </div>
                <div style="height:702px;width:80%; padding:0% 5%;float:left; overflow: hidden;">
                    <table border="0" style="width:100%;font-size:14px;" cellpadding="2px" cellspacing="2px">
                       <tr width="100%" style="border-bottom:double;">
                           <th style="border-right:dotted;text-align: center;"><h3>SL</h3></th>
                           <th style="border-right:dotted;text-align: center;"><h3>Medicine</h3> </th>
                           <th style="border-right:dotted;text-align: center;"><h3>Instruction</h3></th>
                           <th style="border-right:dotted;text-align: center;"><h3>Period</h3></th>
                           <th style="text-align: center;"><h3>Remark</h3></th>
                       </tr>
                       <tr><td colspan="5"><hr/></td></tr>
                          <?php db_operations::show_medicine(); ?>
                    </table>
                </div>
            </div>
            <div style="height:50px;width:100%;clear:both;border-top:dotted;">
                <div style="height:50px;width:60%;float:left;padding-left: 5%;">Next Appointment Date :
                    <?php db_operations::show_appointment_date(); ?>
                </div>
               <div style="height:50px;width:35%float:left;text-align: left;">Signature :
                    
                </div>
            </div>
        </div>

<?php include('include/footer.php');?>