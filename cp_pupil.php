<?php
  // Insert the page header
  $page_title = 'Edusim - Dashboard';
  require_once('session_start.php');
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
                            <h6><i class="glyphicon glyphicon-refresh"></i><b> MANAGE PASSWORD</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>CHANGE PASSWORD</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

		  	<div class="content-box-large">
		  		<?php

                                              // Connect to the database
                                              $tt = mysqli_connect('localhost', 'root', '', 'test');

                                              if (isset($_POST['submit'])) 
                                              
                                                      
                                              {
                                                        // Grab the data from post
                                                        $pw_current = ($_POST['pw_current']);
                                                        $pw1 = ($_POST['pw1']);
                                                        $pw2 = ($_POST['pw2']);
                                                        $used_id = $_SESSION['user_id'];
                                                        if ($pw1 == $pw2) 
                                                        {
                                                          $used_id = $_SESSION['user_id'];
                                                          $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                          $query = "SELECT password FROM user WHERE user_id = '$used_id' AND password = SHA('$pw_current')";
                                                          $data = mysqli_query($tt, $query);
                                                          $row = mysqli_fetch_array($data);
                                                           if (mysqli_num_rows($data) == 1)
                                                           {
                                                              
                                                                
                                                                $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                                $query = "UPDATE user SET password = SHA('$pw2') WHERE user_id= '$used_id'";

                                                                mysqli_query($tt, $query);
                                                              
                                                              echo '<div class="text-success"><strong><h6>YOU HAVE CHANGED YOUR PASSWORD SUCCESFULLY</strong></h6></strong></div>';
                                                           }

                                                           else
                                                           {
                                                            echo '<div class="text-danger"><strong><h6>IT SEEMS YOUR CURRENT PASSWORD IS WRONG</strong></h6></strong></div>';
                                                           }

                                                           
                                                          
                                                        }
                                                        else
                                                        {
                                                          echo'<div class="text-danger"><strong><h6>THE PASSWORDS ENTERED DO NOT MATCH</strong></h6></strong></div>';
                                                                                        }
                                                        
                                     
                                              }                   
                                            ?>
			<div class="panel-body">
			<h6>
                 <form  class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                   <div class="form-group">
                   <label for="pw_current" class="col-sm-2 control-label" >Current Password:</label>
                   <div class="col-sm-10">
                   <input  class="form-control" type="password" id="pw_current" name="pw_current" value="<?php if (!empty($pw_current)) echo $pw_current; ?>" /> 
                   </div>
                   </div>
                   <div class="form-group">
                   <label for="pw1" class="col-sm-2 control-label" >New Password</label>
                   <div class="col-sm-10">
                   <input class="form-control" type="password" id="pw1" name="pw1" value="<?php if (!empty($pw1)) echo $pw1; ?>" /> 
                   </div>
                   </div>
                   <div class="form-group">
                   <label class="col-sm-2 control-label" for="pw2">Confirm New Password</label>
                   <div class="col-sm-10">
                   <input  class="form-control" type="password" id="pw2" name="pw2" value="<?php if (!empty($pw2)) echo $pw2; ?>" /> 
                   </div>
                   </div>
                  <div class="col-sm-offset-2 col-sm-10">
                  <input style="color: white; font-weight: bold; text-align: center;" type="submit" value="SUBMIT" class="btn btn-success" name="submit" />
                  </div>
                  </form>
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