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
	  						<h6><b>USER LISTINGS</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>

		  	<div class="content-box-large">
				<div class="panel-body">
                <?php

                     // Retrieve the subject data from MySQL
                      $dbc = mysqli_connect('localhost', 'root', '', 'test');
                      $query = "SELECT user. username, people. first_name, people. other_names, user. type, user. status FROM people INNER JOIN user ON people. user_id = user. user_id";
                      $data = mysqli_query($dbc, $query)
                              or die(mysqli_error());

                      // Loop through the array of user data, formatting it as HTML 
                                echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Names</th>
                                        <th>Account Type</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>';
                     while ($row = mysqli_fetch_array($data)) 
                     { 
                      // Display the subject information
                      
                      echo '<tr class="odd gradeX"><td>' . $row['username'] . '</td>';
                      echo '<td>' . $row['first_name'] . ' ' . $row['other_names'] . '</td>';
                      echo '<td>' . $row['type'] . '</td>';                     
                      echo '<td class="center"><a href="edit_user.php?status=' . $row['status'] . '&amp;username=' . $row['username'] . '"><b class="text-success"> EDIT</b></a><b>&emsp;</b>';
                      echo '<a href="remove_user.php?username=' . $row['username'] . '&amp;status=' . $row['status'] . '"><b class="text-warning"> DELETE</b></a></td>';

                      $user = $row['status']; 

                      
                      if ($user == 1) 
                      {
                          echo '<td class=""><p class="text-success"><i class="glyphicon glyphicon-ok"></i></p></td></tr>';
                          
                          
                      }
                      else
                      {
                          echo '<td class=""><p class="text-warning"><i class="glyphicon glyphicon-lock"></i></p></td>';
                      }
  
                     }
                      echo '</thead> </table>';

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