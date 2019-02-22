<?php
ob_start();
session_start();

require_once('include/header.php');
//require_once('connect.php');
?>

<style>
#data-loading{
	font-size:14px;
	color:#000;
	position:absolute;
	left:320px;
	z-index:1000;
}
</style>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="post">
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
					<ol class="breadcrumb">
						<li><i class="fa fa-angle-double-right"></i><a href="prescribe.php">&nbsp; Home</a></li>
						<li style="color:#1a1a1a;">

                        </li>						  	
					</ol>
				</div>
          <div class="tab-pane">
          	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
	        	<div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-user"></i></span>
	                <input type="text" class="input-control" onfocus="this.select();" placeholder="Patient Name" id="patientName" style="color:#000" name="patientName" autoComplete="off" required>
	            </div>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
	        	<div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
	                <input type="text" class="input-control" onfocus="this.select();" placeholder="Phone Number" id="mobile" style="color:#000" name="phone" autoComplete="off"required>
	            </div>
	        </div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
			<div class="input-group">
											                       
											                    	
														            <input type="text"  class="input-control" style=" !important;;" placeholder="Age" id="age_" name="age_" autoComplete="off"  value="" >
														            
														        	 
														        	<select name="ageType_" id="ageType_"  class="input-control" style="">
											                    		<option value="Years" >Years</option>
											                    		<option value="Months">Months</option>
											                    		<option value="Days" >Days</option>
											                    	</select>
														        	
											                    </div>
			
			</div>
	       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
				<div class="input-group">
					
												        		 <span>Sex : </span> 
												        		 <label>
											                    	<input type="radio" name="radio" id="male" value="Male" >
											                    	Male  
											                    
											                    
											                     	<input type="radio" name="radio" id="female" value="Female" >
											                     	Female 
											                    
											                    
											                     	<input type="radio"  name="radio" id="others" value="Others"  >
											                     	Others
											                    
												        		   </label>
												        		
											                      
				</div>
		   </div><br>
	
		   	    	       <div >
				<div >
					<input type="datetime-local" class="input-control" onfocus="this.select();" placeholder="date" id="" style="color:#000" name="date" autoComplete="off"required>
	
											                      
				</div>
		   </div>
		   		   	    	       <div >
				<div >
					<input type="text" class="input-control" onfocus="this.select();" placeholder="C/C" id="" style="color:#000" name="c_c" autoComplete="off" required>
	
											                      
				</div>
		   </div>

		
          </div>


         
	          		
	          					
				          			<!-- Start Tab left inner -->
				          		

				          		
                                        


				          			
							          	<div class="panel panel-default">
							          	    <div class="panel-body">
									            <div align="center">
						                        	<a href="/prescription-master/cancel.php"<button class="btn btn-danger">Cancel</button></a>
						                        	<input class="btn btn-primary" type="submit" value ="prescribe" name ="done">
						               
				          			<!-- End Tab left inner -->
				          			
				          			<!-- Start Tab right inner -->
				          		
				          			</div>
				          			<!-- End Tab right inner -->
				          		</div>
	          			
	         
	          	</div>          
          </section>
		  </form>
		  
						<?php
						include('model/class_db_operations.php');
					
						if($_POST['done']){
							
							
									if(isset($_POST['radio'])) echo $_POST['radio'];
								
							db_operations::update_temp_patient($_POST['patientName'],$_POST['age_'],$_POST['ageType_'],$_POST['radio'],$_POST['phone'],$_POST['date'],$_POST['c_c']);
								
								header("location:/prescription-master/show_prescription.php");
								
								
							
							
							
						}
						else{
							echo $_SESSION['name'];
						}
						
						
						?>
		  
<?php
require_once('include/footer.php');

?>