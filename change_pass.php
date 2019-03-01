
     <?php
	 
		include("Include/header.php");
	 
	 ?>



         <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Change Password</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">



		     <div class="form-group">
            <div class="form-row">
               <div class="col-md-6">
                <label >Current Password</label>
                <input class="form-control" name ="old_pass" type="password" placeholder="Current Password" required>
              </div>
           </div>
              <div class="form-row">
                 <div class="col-md-6">
                <label >New Password</label>
                <input class="form-control" name="new_pass" type="password" placeholder="New Password" required >
              </div>
              </div>
			   <div class="form-row">
          <div class="col-md-6">
                <label >Confirm Password</label>
                <input class="form-control" name="fin_pass" type="password" placeholder="Retype Password" required >
              </div>
              </div>
            </div>
          </div>
		  


		  

            <div class="form-group">
             <div class="form-row">
               <div class="col-md-12" style="margin-left: 45%;margin-top:10%;">
                 <input type ="submit" name="submit" value="Update" class="btn btn-primary" >
              </div>
             </div>
          </div>
        </form>

      </div>
    </div>
				<?php
				require_once("controller/class_data_validation.php");
				
				if(isset($_POST['submit'])){
					
					data_validation::change_pass($_POST['old_pass'],$_POST['new_pass'],$_POST['fin_pass']);
				}
				
				
				?>
    
	<?php
	include("Include/footer.php");
	?>