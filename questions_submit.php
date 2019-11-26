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
		  		<a href="exams_start.php">r</a>
		  	</div>

		  	<div class="content-box-large">
			<div class="panel-body">
			<?php
                                  //Script - Store Subject Information

                                  if (isset($_POST['submit'])) 
                                  {

                                    // Grab the data from post
                                    
                                    $question_id = ($_POST['question_id']);
                                    $exam_id = ($_POST['exam_id']);
                                    $answer = ($_POST['radio']);
                                    $user_id = $_SESSION['user_id'];
                                    
                                    
                                    
                                    


                                      if (!empty($answer) && !empty($question_id) && !empty($user_id))

                                        {
                                                     //Connect to the database

                                                     $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                             $query = "INSERT INTO `provided_answers` (`pa_id`, `question_id`, `answers`, `user_id`) VALUES (NULL, '$question_id', '$answer', '$user_id') ";   
                                                             
                                                             mysqli_query($tt, $query);

                                                           // Confirm success with the user
                                                           
                                                           echo'<a href="exams_start.php?exam_id=' . $exam_id . '"><b class="text-info" style="font-size: 15px; text-align: center;">BEGIN THIS EXAM</b><b>&emsp;</b></a>';
                                                           
                                        }
                                        else 
                                          {
                                            echo '<div class="text-error"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>OPPS! SOMETHING WENT WRONG</strong></h6></strong></div>';
                                          }
                                              // Clear the number data to clear the form
                                                      
                                                        $radio = '';
                                                        

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