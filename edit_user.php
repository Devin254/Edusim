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

            // Connect to the database
            $tt = mysqli_connect('localhost', 'root', '', 'test');


            if (isset($_GET['username']) && isset($_GET['status'])) 

            {
              // Grab the data from the GET
              
              $username = ($_GET['username']);
              $status = ($_GET['status']);
            
            }

            else 
            {
              echo '';
            }

            if (isset($_POST['submit'])) 
                    {

                      // Grab the data from post

                     
                      $username = ($_POST['username']);
                      $status = ($_POST['status']);
                      
                      


                        if (!empty($username) && !empty($status))

                          {
                                      
                                      $tt = mysqli_connect('localhost', 'root', '', 'test');
                                      $query = "UPDATE `user` SET `status` = '$status' WHERE `user`.`username` = '$username'";



                                      mysqli_query($tt, $query);
                                             // Confirm success with the user
                                             
                                              echo '<div class="text-success"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>THE RECORD WAS UPDATED SUCCESFULLY</strong></h6></strong></div>';
                                              
                            }
                          else 
                            {
                              echo '<div class="text-danger"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>ERROR ON PROFILE ACESS</strong></h6></strong></div>';
                            }
                    }
                else
                {

                      // Grab the profile data from the database
                      $tt = mysqli_connect('localhost', 'root', '', 'test');
                      $query = "SELECT username, status FROM user WHERE `username` = '$username'";
                      $data = mysqli_query($tt, $query);
                      $row = mysqli_fetch_array($data);
                

                      if ($row != NULL) 
                      {
                        $username = ($row['username']);
                        $status = ($row['status']);
                      }
                      else 
                      {
                        echo '<div class="text-danger"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>THERE HAS BEEN AN ERROR ACCESSING YOUR PROFILE</strong></h6></strong></div>';
                      }
                       mysqli_close($tt);                
                  }
          ?>

				<div class="panel-body">

          
          
          <h6>
          <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?php if (!empty($username)) echo $username; ?>" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="status">Status:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="status" value="<?php if (!empty($status)) echo $status; ?>" style="text-align: left;" />
                        </div>
                     </div>
                     <div class="form-group">
                     <br>
                     </div>
                      <br>
                      <div style="text-align: center;">
                      <input style="color: white; font-weight: bold;" type="submit" value="SUBMIT" class="btn btn-success" name="submit" />
                      </div>
              </form>
                      </div>
                   
                 </h6>
                                         						
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