
     <?php
	 
		include("Include/header.php");
	 
	 ?>



     
         <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Change User Name</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">



		     <div class="form-group">
            <div class="form-row">
              
                <label >Current User name</label>
                <input class="form-control" name ="cuname" type="text" placeholder="User Name" required>
           </div>
              <div class="form-row">
                <label >New User Name</label>
                <input class="form-control" name="uname" type="text" placeholder="New User Name" required >
              </div>
			   <div class="form-row">
                <label >Confirm User Name</label>
                <input class="form-control" name="funame" type="text" placeholder="Retype User Name" required >
              </div>
            </div>
          </div>
		  


		  

          <input type ="submit" name ="submit" value ="Change" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
			<?php
			require_once("controller/class_data_validation.php");
			if(isset($_POST['submit'])){
				
				
				data_validation::username_add($_POST['cuname'],$_POST['uname'],$_POST['funame']);
				
			}
			
			?>
    
	<?php
	include("Include/footer.php");
	?>