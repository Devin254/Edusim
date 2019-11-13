<?php
  // Insert the page header
  $page_title = 'Users';
  require_once('header.php');
  require_once('admin_db.php');
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
	  						<h6><i class="glyphicon glyphicon-user"></i>  <b>USERS</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">
	  						<h6><b>EDIT THIS PROFILE: </b></h6> 
	  					</div>
		  			</div> 
                          
                          
                           

		  		</div>
		  	</div>
         
		  	<div class="content-box-large">
<?php


                if (isset($_GET['username']) && isset($_GET['status'])) 

                {
                  // Grab the score data from the GET
                  $username = ($_GET['username']);
                  $status = ($_GET['status']);
                  //Connect to the database
                  $dbc = mysqli_connect('localhost', 'root', '', 'test');
                  // Delete the user data from the database
                  $query = "DELETE FROM `user` WHERE `user`.`username` = '$username'";
                            mysqli_query($dbc, $query);
                    mysqli_close($dbc);
                    // Confirm success with the user
                    echo ' <div class="text-success"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>THE RECORD HAS BEEN SUCCESSFULY DELETED</strong></h6></strong></div>';

                  
                }

                else 
                {
                  echo '<p class="error" Error fetching data! </p>';
                }
                ?>

				<div class="panel-body">
 
                                         						
		   </div>				
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