<?php
	include('include/header.php');
	include('model/class_db_operations.php');
?>

</!DOCTYPE html>
<html>
<head>
    <title>Prescription</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        #memo{
            width:700px;
            min-height:200px;
            height:auto;
            margin:auto;
        }
        #main_page{
            width:700px;
            height:auto;
            margin:auto;
        }
        

        
    </style>
</head>
</html>

    <center><button onclick="window.print()" id="print_btn" style="padding:5px 15px; font-weight:bold">Print</button></center>
    <div id="main_page">       
        <div id="memo">
            <table border="0"  width="100%" cellpadding="0" cellspacing="0">
                 <tr>
                     <td colspan="7" align="center" valign="top"><h2></h2>
                </tr>
                <tr>
                   <?php
				   db_operations::show_profile();
				   ?>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Patients ID : 101/02/2019 </td>
                            </tr>
                         </table>
                    </td>
                </tr>
            </table>
            
            <hr>
            <table  border="0" width="100%" cellpadding="0"  cellspacing="0">
                <tr>
				<?php
				db_operations::show_temp();
				
                
				?>
            </table>
            </br>
            <img src="img/prescription.png" alt="Rx" width="50px"/>
            <hr>
            <table border="0" width="100%" cellpadding="0" cellspacing="0">

                <tr align="left">
                    <td>
                        <table border="0" border-collapse="collapse" cellpadding="0" cellspacing="0">
                            <tr align="left"><th><u>C/C</u></th></tr>
							<?php  db_operations::show_cc(); ?>
                            <tr align="left"><th><u>O/E</u></th></tr>
                            <tr align="left"><th><u>ADV</u></th></tr>
                        </table>
                    </td>
                    <td colspan="6">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                       <?php  db_operations::show_temp_info();?>
                            
                            
                        </table>
                    </td>
                </tr>
                <tr><td colspan="7"><hr border="5px solid gray"></td></tr>
                <tr>
                    <td colspan="4">Next Appointment Date......................</td>
                    <td colspan="3">Signature.................</td>
                </tr>
            </table>
        </div>
     </div>
	<?php  db_operations::show_full_temp();?>

<?php
include('include/footer.php');
?>