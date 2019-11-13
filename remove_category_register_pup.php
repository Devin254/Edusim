<?php
  // Insert the page header
  $page_title = 'Edusim - Dashboard';
  require_once('header.php');
  require_once('pupil_db.php');
?>

		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-6">
		  			
		  		</div>
		  	</div>		  	
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">
	  						<h6><i class="glyphicon glyphicon-tasks"></i>  <b>DELETE EXAM REGISTRATION</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>
		  	<div class="content-box-large">	
										  	<?php


								                if (isset($_GET['register_id']) && isset($_GET['category_id']) && isset($_GET['user_id'])) 

								                {
								                  // Grab the score data from the GET
								                  $register_id = ($_GET['register_id']);
								                  $category_id = ($_GET['category_id']);
								                  $user_id = ($_GET['user_id']);

								                    // Delete the user on confirmation
								                    //Connect to the database
								                    $dbc = mysqli_connect('localhost', 'root', '', 'test');
								                    // Delete the user data from the database
								                    $query = "DELETE FROM `exam_register` WHERE `exam_register`.`category_id` = '$category_id' AND `exam_register`.`user_id` ='$user_id' LIMIT 1";
								                              mysqli_query($dbc, $query);
								                              mysqli_close($dbc);
								                          // Confirm success with the user
								                          echo '<div class="text-success"><strong><h6>THE EXAM RECORD WAS SUCCESSFULLY REMOVED</strong></h6></strong></div>';

								                  
								                }

								                else 
								                {
								                  echo '<div class="text-success"><strong><h6>OOPS! AN ERROR OCCURED</strong></h6></strong></div>';
								                }
								        ?>													  		
			<div class="panel-body">				
		  	</div>				
		</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>