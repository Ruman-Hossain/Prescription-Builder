
     <?php
	 
		include("include/header.php");
	 
	 ?>



     
      
    <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Hospital</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">



		     <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label >Test Name</label>
                <input class="form-control" name ="test" type="text" placeholder="Name of Test" required>
              </div>

            </div>

          </div>
		  

		   

          <input type ="submit" name="submit" value ="Add" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
  </div>
			<?php
			require_once("model/class_db_operations.php");
			require_once("controller/check.php");
			

			
			
				if(isset($_POST['submit'])){
				if(($_POST['test'])==null ){
				echo "Data Field must be filled up";
				}
			else{
				$_POST['test'] = check_input::test_input($_POST['test']);
				
				db_operations::insert_test($_POST['test']);
				echo "successfully added";
				
			}
			}
		
			?>
				
				
				
	<?php
	include("include/footer.php");
	?>