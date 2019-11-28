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


										echo'<h6><table width="100%" class="table table-striped table-bordered table-hover"id="dtexample" data-page-length="1">
							                                                  <thead>
							                                                      <th>THANK YOU FOR DOING THE EXAMS</th>
							                                                  </thead>
							                                                  <tbody>
							                                                  <tr><td style="text-align: center;">YOU HAVE SCORED</td></tr>
							                                                  <tr><td style="font-size: 40px; color: green; text-align: center;">'. $performance .'%</td></tr>
							                                                  </tbody>
							                                                  </table></h6>';	
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