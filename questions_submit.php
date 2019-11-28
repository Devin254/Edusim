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
                                  //Script - Store Subject Information

                                 
                                    // Grab the data from post
                                   


                                    if (isset($_POST['submit'])) 
                                    {

                                        if (!empty($_POST['question_id']) && !empty($_POST['answer']) && !empty($_POST['user_id']) &&
                                                 is_array($_POST['question_id']) && is_array($_POST['answer']) && is_array($_POST['user_id']) &&
                                                 count($_POST['question_id']) === count($_POST['answer'])
                                          ) 
                                        {
                                                  $question_id_array = $_POST['question_id'];
                                                  $answer_array = $_POST['answer'];
                                                  $user_id_array = $_POST['user_id'];

                                                  


                                                  for ($i = 0; $i < count($question_id_array); $i++) 
                                                  {
                                                      $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                      $question_id = $question_id_array[$i];
                                                      $answer = $answer_array[$i];
                                                      $user_id = $user_id_array[$i];
                                                      
                                                      $query = "INSERT INTO `provided_answers` (`pa_id`, `question_id`, `answers`, `user_id`) VALUES (NULL, '$question_id', '$answer', '$user_id') ";   
                                                             
                                                       mysqli_query($tt, $query);

                                                  } 

                                                  echo'<h6><table width="100%" class="table table-striped table-bordered table-hover"id="dtexample" data-page-length="1">
                                                  <thead>
                                                      <th>THANK YOU FOR DOING THE EXAMS</th>
                                                  </thead>
                                                  <tbody>
                                                  <tr><td><a href="exam_results.php">GENERATE RESULTS</a></td></tr>
                                                  </tbody>
                                                  </table></h6>';
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