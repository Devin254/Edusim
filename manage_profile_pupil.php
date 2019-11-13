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
	  						<h6><i class="glyphicon glyphicon-user"></i>  <b>PROFILE</b></h6> 
	  					</div>
		  			</div> 
		  			<div class="text-warning" style="text-align: center;"><strong><h6><a href=""><b class="text-success"><i class="glyphicon glyphicon-edit" style="size: 20px;"></i> EDIT</b></a></h6></strong></div>

		  		</div>
		  	</div>

		  	<div class="content-box-large">      
				<div class="panel-body">
				<div class="form-group">
															    <?php

										                     // Retrieve the subject data from MySQL
										                      $dbc = mysqli_connect('localhost', 'root', '', 'test');
										                      $user_id = $_SESSION['user_id'];
										                      $query = "SELECT * FROM `people` WHERE `user_id` = '$user_id'";
										                      $query_submit = "SELECT * FROM `people` WHERE `user_id` = '$user_id'";
										                      $data = mysqli_query($dbc, $query)
										                      or die(mysqli_error());
										                      $data_submit = mysqli_query($dbc, $query_submit)
										                      or die(mysqli_error());

										                      // Loop through the array of user data, formatting it as HTML 
										                                echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
										                                <thead>
										                                    <tr>
										                                        <th>MY PROFILE</th>
										                                        <th><i class="glyphicon glyphicon-user"></i>
										                                        </th>
										                                    </tr>
										                                </thead>
										                                <tbody>';
										                     while ($row = mysqli_fetch_array($data)) 
										                     { 
										                      // Display the subject information
										                      
										                      echo '<tr class="odd gradeX"><td>PUPIL IDENTIFICATION</td>';
										                      echo '<td>' . $row['identification'] . '</td></tr>';
										                      echo '<tr class="odd gradeX"><td>GENDER</td>';
										                      echo '<td>MALE</td></tr>';
										                      echo '<tr class="odd gradeX"><td>FIRST NAME</td>';
										                      echo '<td>' . $row['first_name'] . '</td></tr>';
										                      echo '<tr class="odd gradeX"><td>OTHER NAMES</td>';
										                      echo '<td>' . $row['other_names'] . '</td></tr>';
										                      echo '<tr class="odd gradeX"><td>GRADE LEVEL</td>';
										                      echo '<td>Grade ' . $row['grade_level'] . '</td></tr>';
										                      echo '<tr class="odd gradeX"><td>EMAIL ADDRESS</td>';
										                      echo '<td>' . $row['email'] . '</td></tr>';
										                      echo '<tr class="odd gradeX"><td>PARENTS MOBILE</td>';
										                      echo '<td>' . $row['contact'] . '</td></tr>';
										                    }
										                      echo '</thead> </table>';
										                      while ($row = mysqli_fetch_array($data_submit))
										                      {
										                      echo '<div class="text-warning" style="text-align: center;"><strong><h6><a href="edit_profile_pupil.php?person_id=' . $row['person_id'] . '&amp;first_name=' . $row['first_name'] . '&amp;other_names=' . $row['other_names'] . '&amp;identification=' . $row['identification'] . '&amp;email=' . $row['email'] . '&amp;grade_level=' . $row['grade_level'] . '&amp;contact=' . $row['contact'] .  '""><b class="text-success"><i class="glyphicon glyphicon-edit"></i> EDIT MY PROFILE</b></a></h6></strong></div></h6>';
										                      }
										                      mysqli_close($dbc);
										                  ?> 

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