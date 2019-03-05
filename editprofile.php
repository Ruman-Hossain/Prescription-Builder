<?php
	 
		include("include/header.php");
	 
	 ?>


<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>First name</label>
                            <input class="form-control" name="fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Last name</label>
                            <input class="form-control" name="lname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Qualification</label>
                            <input class="form-control" name="qualification" type="text" placeholder="Qualification" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Address</label>
                            <input class="form-control" name="chember" type="text" placeholder="chember address" required>
                        </div>
                        <div class="col-md-6">
                            <label>Designation</label>
                            <input class="form-control" name="designation" type="text" placeholder="Designation" required>
                        </div>
                        <div class="col-md-6">
                            <label>Institution</label>
                            <input class="form-control" name="institution" type="text" placeholder="Institution" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Contact</label>
                            <input class="form-control" name="phn_one" type="phone" placeholder="contact number" required>
                        </div>
                        <div class="col-md-6">
                            <label>mail</label>
                            <input class="form-control" name="mail" type="mail" placeholder="contact number" required>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12" style="margin-left: 45%;margin-top:10%;">
                            <input type="submit" name="submit" value="Update" class="btn btn-primary">
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
					
					
				
			
			
					
					$_POST['fname'] = check_input::test_input($_POST['fname']);
					$_POST['lname'] = check_input::test_input($_POST['lname']);
					$_POST['qualification'] = check_input::test_input($_POST['qualification']);
					$_POST['designation'] = check_input::test_input($_POST['designation']);
					$_POST['institution'] = check_input::test_input($_POST['institution']);
					$_POST['phn_one'] = check_input::test_input($_POST['phn_one']);
					
					$name = "DR ".$_POST['fname']." ".$_POST['lname'];
					
				db_operations::update_profile($name,$_POST['qualification'],$_POST['phn_one'],$_POST['mail'],$_POST['chember'],$_POST['designation'],$_POST['institution']);
				echo "successfully added";
				
			
			}
		
			?>

<?php
	include("include/footer.php");
	?>