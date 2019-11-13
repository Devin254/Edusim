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
	  						<h6><i class="glyphicon glyphicon-user"></i> <b>EDIT MY PROFILE</b></h6> 
	  					</div>
		  			</div> 
		  			<div class="text-warning" style="text-align: center;"><strong><h6><a href=""><b class="text-success"><i class="glyphicon glyphicon-edit" style="size: 20px;"></i> EDIT</b></a></h6></strong></div>

		  		</div>
		  	</div>

		  	<div class="content-box-large">
                                              <?php

                                                  // Connect to the database
                                                  $tt = mysqli_connect('localhost', 'root', '', 'test');


                                                  if (isset($_GET['person_id']) && isset($_GET['first_name']) && isset($_GET['other_names']) && isset($_GET['identification']) && isset($_GET['grade_level']) && isset($_GET['contact']) && isset($_GET['email'])) 

                                                  {
                                                    // Grab the data from the GET
                                                    
                                                    $person_id = ($_GET['person_id']);
                                                    $first_name = ($_GET['first_name']);
                                                    $other_names = ($_GET['other_names']);
                                                    $identification = ($_GET['identification']);
                                                    $grade_level = ($_GET['grade_level']);
                                                    $contact = ($_GET['contact']);
                                                    $email = ($_GET['email']);
                                                  
                                                  }

                                                  else 
                                                  {
                                                    echo '';
                                                  }

                                                  if (isset($_POST['submit'])) 
                                                          {

                                                            // Grab the data from post

                                                           
                                                            $person_id = ($_POST['person_id']);
                                                            $first_name = ($_POST['first_name']);
                                                            $other_names = ($_POST['other_names']);
                                                            $identification = ($_POST['identification']);
                                                            $grade_level = ($_POST['grade_level']);
                                                            $contact = ($_POST['contact']);
                                                            $email = ($_POST['email']);


                                                            
                                                            


                                                              if (!empty($person_id) && !empty($first_name) && !empty($other_names) && !empty($identification) && !empty($grade_level) && !empty($contact) && !empty($email))

                                                                {
                                                                            
                                                                            $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                                            $query = "UPDATE `people` SET `first_name` = '$first_name', `other_names` = '$other_names', `identification` = '$identification', `grade_level` = '$grade_level', `contact` = '$contact', `email` = '$email' WHERE `people`.`person_id` = '$person_id'";





                                                                            mysqli_query($tt, $query);
                                                                                   // Confirm success with the user
                                                                                   
                                                                                    echo '<div class="text-success"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>YOUR PROFILE WAS UPDATED SUCCESFULLY</strong></h6></strong></div>';
                                                                                    
                                                                  }
                                                                else 
                                                                  {
                                                                    echo '<div class="text-danger"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>PLEASE ENTER ALL THE INFORMATION PROVIDED</strong></h6></strong></div>';
                                                                  }
                                                          }
                                                      else
                                                      {

                                                            // Grab the profile data from the database
                                                            $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                            $query = "SELECT first_name, other_names, identification, grade_level, contact, email FROM people WHERE `person_id` = '$person_id'";
                                                            $data = mysqli_query($tt, $query);
                                                            $row = mysqli_fetch_array($data);
                                                      

                                                            if ($row != NULL) 
                                                            {
                                                              $first_name = ($row['first_name']);
                                                              $other_names = ($row['other_names']);
                                                              $identification = ($row['identification']);
                                                              $grade_level = ($row['grade_level']);
                                                              $contact = ($row['contact']);
                                                              $email = ($row['email']);

                                                            }
                                                            else 
                                                            {
                                                              echo '<div class="text-danger"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>THERE HAS BEEN AN ERROR ACCESSING YOUR PROFILE</strong></h6></strong></div>';
                                                            }
                                                             mysqli_close($tt);                
                                                        }
                                                        ?>                
             
				   <div class="panel-body">
				    <div class="form-group">
             <h6><form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden"class="form-control" id="person_id" name="person_id" value="<?php if (!empty($person_id)) echo $person_id; ?>" />
                                <div class="form-group">
                                <label for="first_name" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-8">
                                <input type="text"class="form-control" id="first_name" name="first_name" value="<?php if (!empty($first_name)) echo $first_name; ?>" />
                                </div>
                               </div>
                               <div class="form-group">
                                <label for="other_names" class="col-sm-2 control-label">Other Names</label>
                                <div class="col-sm-8">
                                <input type="text"class="form-control" id="other_names" name="other_names" value="<?php if (!empty($other_names)) echo $other_names; ?>" />
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="grade_level" class="col-sm-2 control-label">Grade Level</label>
                                <div class="col-sm-8">
                                <select class="form-control" id ="select-input-login" type="select" name="grade_level">
                                     <option value="" selected="selected">--Select Your Grade--</option>
                                     <option value="VI">Grade VI</option>
                                     <option value="VII">Grade VII</option>
                                     <option value="VIII">Grade VIII</option>
                               </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="identification" class="col-sm-2 control-label">Student ID</label>
                                <div class="col-sm-8">
                                <input type="text"class="form-control" id="identification" name="identification" value="<?php if (!empty($identification)) echo $identification; ?>" />
                                </div>
                               </div>
                               <div class="form-group">
                                <label for="contact" class="col-sm-2 control-label">Parent's Contact</label>
                                <div class="col-sm-8">
                                <input type="text"class="form-control" id="contact" name="contact" value="<?php if (!empty($contact)) echo $contact; ?>" />
                                </div>
                               </div>
                               <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email Adress</label>
                                <div class="col-sm-8">
                                <input type="text"class="form-control" id="email" name="email" value="<?php if (!empty($email)) echo $email; ?>" />
                                </div>
                               </div>
                              <div class="form-group">
                              </div>
                              <br>
                              <div style="text-align: center;">
                              <input style="color: white; font-weight: bold;" type="submit" value="SUBMIT" class="btn btn-success" name="submit" />
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