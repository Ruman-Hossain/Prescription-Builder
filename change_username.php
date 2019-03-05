<?php
	 
		include("include/header.php");
	 
	 ?>




<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Change User Name</div>
        <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>" method="post">



                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Current User name</label>
                            <input class="form-control" name="cuname" type="text" placeholder="User Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>New User Name</label>
                            <input class="form-control" name="uname" type="text" placeholder="New User Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Confirm User Name</label>
                            <input class="form-control" name="funame" type="text" placeholder="Retype User Name" required>
                        </div>
                    </div>
                </div>
        </div>





        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6" style="margin-left: 45%;margin-top:10%;">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </div>
            </div>
        </div>
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
	include("include/footer.php");
	?>