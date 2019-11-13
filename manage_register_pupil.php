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
	  						<h6><i class="glyphicon glyphicon-tasks"></i>  <b>EXAM REGISTRATION</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>

		  	<div class="content-box-large">
														  		<?php
												                     //Script - Store Room Information

												                    if (isset($_POST['submit'])) 
												                    {

												                      // Grab the data from post

												                      $category_id = ($_POST['category_id']);
												                      $user_id = ($_POST['user_id']);
												                      
												                      
												                      


												                        if (!empty($category_id))

												                          {
												                                       //Connect to the database
												                                       $tt = mysqli_connect('localhost', 'root', '', 'test');
												                                       $query = "INSERT INTO `exam_register` (`register_id`, `category_id`, `user_id`) VALUES (NULL, '$category_id', '$user_id')";
												                                                mysqli_query($tt, $query);
												                                                 // Confirm success with the user
												                                  
												                                              echo '<div class="text-success"><strong><h6>EXAM REGISTRATION SUCCESFUL</strong></h6></strong></div>';
												                                             
												                                             
												                                             
												                            }
												                          else 
												                            {
												                              echo 'Choose an Exam';
												                            }
												                                         // Clear the score data to clear the form
												                                $category_id = '';

												                    }
												                 ?>
			<div class="panel-body">
				    <h6>
					<b id="strong-text">REGISTRATION FOR EXAMS</b>
					<br>
					<br>
					<form  class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group">
						<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>"/>
							<label class="col-md-2 control-label" for="class_id">Category : </label>
							<div class="col-md-6">
                              <select class="form-control" for="category_id" name="category_id" id="category_id" value="<?php if (!empty($category_id)) echo $category_id; ?>">
                                                  <option value="">-- Select Exam Category -- </option>
                                                  <?php
                                                    $dbc = mysqli_connect('localhost', 'root', '', 'test');
                                                    $category_name = $row10['category_name'];
                                                    $query = "SELECT * FROM `category`";
                                                    $data = mysqli_query($dbc, $query)
                                                            or die(mysqli_error());
                                                     if ($data != 0) 
                                                    {
                                                        
                                                    $a = mysqli_num_rows($data);
                                                        for ($i=0; $i<$a; $i++) 
                                                        {
                                                            $row = mysqli_fetch_array($data);
                                                            $category_name = $row['category_name'];
                                                            $category_id = $row["category_id"];

                                                            echo '<option value="' .$category_id. '">' .$category_name. '</option>';
                                                        }
                                                    }
                                                  ?>                  
                               </select>
							<span class="help-block" id="name-help"></span>
							</div>
							<div class="col-md-2">
							<input style="font-weight: bold;" class="btn btn-sm btn-success" type="submit" value="REGISTER" name="submit" />
						</div>

						</div>
					</form>
					<br>
					<br>
					</h6>
					<?php

                     // Retrieve the subject data from MySQL
                      $uses_id = $_SESSION['user_id'];
                      $dbc = mysqli_connect('localhost', 'root', '', 'test');
                      $query = "SELECT register_id, exam_register. category_id, exam_register. user_id, category. category_name FROM exam_register INNER JOIN category ON category. category_id = exam_register .category_id WHERE exam_register .user_id = '$uses_id'";
                      $data = mysqli_query($dbc, $query)
                              or die(mysqli_error());

                      // Loop through the array of user data, formatting it as HTML 
                      echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                     <tr>
                                        <th>REGISTERED EXAM CATEGORY</th>
                                        <th>DELETE CATEGORY</th>
                                    </tr>
                                </thead>';
                     while ($row = mysqli_fetch_array($data)) 
                     { 
                      // Display the subject information
                      

                      echo '<td class="odd gradeX">' . $row['category_name'] . '</td>';
                      echo '<td><a href="remove_category_register_pup.php?register_id=' . $row['register_id'] . '&amp;category_id=' . $row['category_id'] . '&amp;user_id=' . $row['user_id'] . '"><button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-trash"></i></button></a></td></tr>';
                      
  
                     }
                      echo '</thead> </table>';

                      mysqli_close($dbc);
                  ?>				
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