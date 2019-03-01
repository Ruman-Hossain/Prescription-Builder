
     <?php
	 
		include("Include/header.php");
	 
	 ?>



     
      
    <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Hospital</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">



		     <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label >Insert Qunatity</label>
                <input class="form-control" name ="quantity" type="text" placeholder="quantity" required>
              </div>

            </div>

          </div>
		  

		   
            <div class="form-group">
             <div class="form-row">
               <div class="col-md-6" style="margin-left: 45%;margin-top:10%;">
                 <input type ="submit" name="submit" value="Add" class="btn btn-primary" >
              </div>
             </div>
          </div>
        </form>

      </div>
    </div>
  </div>
			<?php
			require_once("model/class_db_operations.php");
			require_once("controller/check.php");
			

			
			
				if(isset($_POST['submit'])){
				if(($_POST['quantity'])==null ){
				echo "Data Field must be filled up";
				}
			else{
				$_POST['quantity'] = check_input::test_input($_POST['quantity']);
				
				db_operations::insert_quantity($_POST['quantity']);
				echo "successfully added";
				
			}
			}
		
			?>
				
				
				
	<?php
	include("Include/footer.php");
	?>