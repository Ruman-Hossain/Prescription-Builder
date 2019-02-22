<?php

	include('include/header.php');

?>


		<?php
		include('model/class_db_operations.php');
		
		db_operations::show_temp();
		
		?>
             <body>

			 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="post">
	                      	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
	        	<div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-user"></i></span>
	                <input type="text" class="input-control" onfocus="this.select();" placeholder="medicin or test" id="patientName" style="color:#000" name="mdcn" autoComplete="off" required>
	            </div>
	        </div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
			<div class="input-group">
											
											                    	
														            <input type="text"  class="input-control" style=" !important;;" placeholder="period" id="" name="peri" autoComplete="off"  value="" >
														            
														        	 <select name='period'   class='input-control'>
								
								
														        	
											                    		                       <?php
																                              db_operations::show_period();
																							  
																	
																	?>
																   
																
											                    	</select>
														        	
											                    </div>
																			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
																			<div class="input-group">
											                       
											                    	
														            <input type="text"  class="input-control" style=" !important;;" placeholder="quantity" id=""  autoComplete="off"  value="" >
														            
														        	 
														        	<select name="quantity" id=""  class="input-control" style="">
											                    		<?php db_operations::show_quantity();
																		?>
											                    	</select>
														        	
											                    </div>
			
			</div>
			
			</div>	
																			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
																			<div class="input-group">
											                       
											                    	
														            <input type="text"  class="input-control" style=" !important;;" placeholder="having_time" id="" autoComplete="off"  value="" >
														            
														        	 
														        	<select name="having_time" id=""  class="input-control" style="">
											                    		<?php db_operations::show_having();?>
											                    	</select>
														        	
											                    </div>
			
			</div>		
																			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
																			<div class="input-group">
											                       
											                    	
														            <input type="text"  class="input-control" style=" !important;;" placeholder="type" id="" autoComplete="off"  value="" >
														            
														        	 
														        	<select name="type" id=""  class="input-control" style="">
											                    		<option value = "Syrap">Syrap</option>
																		<option value = "tab">tab</option>
											                    	</select>
														        	
											                    </div>
			
			</div>				
			 						          	<div class="panel panel-default">
							          	    <div class="panel-body">
									            <div align="center">
						                        	<a href="/prescription-master/cancel.php"<button class="btn btn-danger">Cancel</button></a>
						                        	<input class="btn btn-primary" type="submit" value ="View" name ="submit">
						               
				          			<!-- End Tab left inner -->
				          			
				          			<!-- Start Tab right inner -->
				          		
				          			</div>
				          			<!-- End Tab right inner -->
				          		</div>
	          			
	         
	          	</div> 
			 
			 </form>
										<?php
									//include('model/class_db_operations.php');
					
									if($_POST['submit']){
							
							
									
								
								db_operations::update_temp_info($_POST['mdcn'],$_POST['period'],$_POST['quantity'],$_POST['having_time'],$_POST['type']);
								
								header("location:/prescription-master/invoice.php");
								
								
							
							
							
						}
						else{
							echo $_SESSION['name'];
						}
						
						
						?>
			 
			 
			 </body>
			 







<?php
		include('include/footer.php');

?>