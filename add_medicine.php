<?php
	 
		include("include/header.php");
	 
	 ?>





<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Hospital</div>
        <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>" method="post">



                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Medicine Name</label>
                            <input class="form-control" name="medicine" type="text" placeholder="Name of Medicine" required>
                        </div>
                        <div class="col-md-6">
                            <label>Medicine Preparation </label>
                            <input class="form-control" name="med_prep" type="text" placeholder="Preparation of medicine" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Company</label>
                            <input class="form-control" name="company" type="text" placeholder="Name of company" required>
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6" style="margin-left: 45%;margin-top:10%;">
                            <input type="submit" name="submit" value="Add" class="btn btn-primary">
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
				if(($_POST['medicine'])==null ||($_POST['med_prep'])==null || ($_POST['company'])==null ){
				echo "Data Field must be filled up";
				}
			else{
				$_POST['medicine'] = check_input::test_input($_POST['medicine']);
				$_POST['med_prep'] = check_input::test_input($_POST['med_prep']);
				$_POST['company'] = check_input::test_input($_POST['company']);
				db_operations::insert_medicine($_POST['medicine'],$_POST['med_prep'],$_POST['company']);
				echo "successfully added";
				
			}
			}
		
			?>



<?php
	include("include/footer.php");
	?>