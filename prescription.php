<?php
ob_start();

require_once('include/header.php');
require_once('model/connect.php');
?>

<script>
$(function(){
    $('#idNo').typeahead({
        source:function(query, process){
            $.getJSON('search_id_no.php?query='+query, function(data){
                process(data);
            })
        },
        updater:function(item){
            document.location='pathology.php?active=pathology&idNo='+item;
        }
    });
})
</script>     
 
<style>
    body{
    	color:#000;
    }

</style>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
					<ol class="breadcrumb">
						<li><i class="fa fa-angle-double-right"></i><a href="prescribe.php">&nbsp; Home</a></li>
						<li style="color:#1a1a1a;">
                        <?php /*
                            $active = explode("_",$_GET['active']);
							
							foreach($active as $name){
								echo ucfirst($name);
								echo " ";
							}*/
                        ?>
                        </li>						  	
					</ol>
				</div>            
                <div class="row">
                	<div class="col-lg-4 col-lg-offset-3">
                    	<input type="text" class="input-control" id="idNo" name="idNo" placeholder="ID No" autoFocus>
                    </div>
                </div> 
        </section>       
      </section>

<?php
require_once('include/footer.php');	

?>