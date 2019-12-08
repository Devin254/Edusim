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
	  						<h6><i class="glyphicon glyphicon-dashboard"></i>  <b>DASHBOARD</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>

		  	<div class="content-box-large">
			<div class="panel-body">
		                                   <?php
                                           $tt = mysqli_connect('localhost', 'root', '', 'test');
                                           $query1 = "SELECT questions. question_id, questions. answer, provided_answers. answers, provided_answers. user_id FROM questions INNER JOIN provided_answers ON questions. question_id = provided_answers. question_id ";
		                                   $query = "SELECT questions. question_id, questions. answer, provided_answers. answers, provided_answers. user_id FROM questions INNER JOIN provided_answers ON questions. question_id = provided_answers. question_id WHERE questions. answer = provided_answers. answers";
			                               $data = mysqli_query($tt, $query);
			                               $data1 = mysqli_query($tt, $query1);
			                               $result = mysqli_num_rows($data);
			                               $q = mysqli_num_rows($data1);
			                               $performance = ($result / $q) * 100; 
			                               if (isset($_GET['exam_id'])) 

	                                           {
	                                          // Grab the data from the GET
	                                          
	                                          $exam_id = ($_GET['exam_id']);
	                                          // Grab the data from the SESSION 

	                                          $user_id = $_SESSION['user_id'] ;
	                                          $tt = mysqli_connect('localhost', 'root', '', 'test');

	                                          $query_type = "SELECT user_id, exam_id, score FROM performance WHERE user_id = '$user_id' AND exam_id = '$exam_id'";
			                                            $data_exam = mysqli_query($tt, $query_type);
			                                            $rows = mysqli_fetch_array($data_exam);
			                                            $scoreline = $rows['score'];
                                 
                                            if (mysqli_num_rows($data_exam) == 0) 
                                            {            
	                                                     $query3 = "INSERT INTO `performance` (`performance_id`, `exam_id`, `user_id`, `score`) VALUES (NULL, '$exam_id', '$user_id', '$performance')";    
	                                                      mysqli_query($tt, $query3);

												echo'<h6><table width="100%" class="table table-striped table-bordered table-hover"id="dtexample" data-page-length="1">
									                                                  <thead>
									                                                      <th>THANK YOU FOR DOING THE EXAMS</th>
									                                                  </thead>
									                                                  <tbody>
									                                                  <tr><td style="text-align: center;">YOU HAVE SCORED</td></tr>
									                                                  <tr><td style="font-size: 40px; color: green; text-align: center;">'. $performance .'%</td></tr>
									                                                  </tbody>
									                                                  </table></h6>';

									           	$dd = mysqli_connect('localhost', 'root', '', 'test');
									        	$query10 = "DELETE FROM provided_answers";    
	                                            mysqli_query($dd, $query10);
									           
									        	
									   

									   
                                            }
									        
									        else 
									        {
									        	echo'<h6><table width="100%" class="table table-striped table-bordered table-hover"id="dtexample" data-page-length="1">
									                                                  <thead>
									                                                      <th>THANK YOU FOR DOING THE EXAMS</th>
									                                                  </thead>
									                                                  <tbody>
									                                                  <tr><td style="text-align: center;">YOU HAVE SCORED</td></tr>
									                                                  <tr><td style="font-size: 40px; color: green; text-align: center;">'. $performance .'%</td></tr>
									                                                  <tr><td style="text-align: center; color: seagreen;">PLEASE NOT THAT THE SCORE YOU GET FROM A REDO DOES NOT CHANGE YOUR PREVIOUS PERFORMANCE</td></tr>
									                                                  <tr></tr>
									                                                  <tr><td style="text-align: center;">YOU PREVIOUS SCORE WAS</td></tr>
									                                                  <tr><td style="font-size: 40px; color: green; text-align: center;">'. $scoreline .'%</td></tr>
									                                                  </tbody>
									                                                  </table></h6>';
									                                                  $tt = mysqli_connect('localhost', 'root', '', 'test');
									        	$query6 = "DELETE FROM provided_answers";    
	                                            mysqli_query($tt, $query6);
									        }								        

                                          }

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