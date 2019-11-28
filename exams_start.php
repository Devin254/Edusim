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
	  						<h6><i class="glyphicon glyphicon-dashboard"></i>  <b>EXAMINATIONS HAVE STARTED</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>
       

		  	<div class="content-box-large">
			<div class="panel-body">
                      											<?php

                                                                             // Retrieve the subject data from MySQL
                                                                              $dbc = mysqli_connect('localhost', 'root', '', 'test');
                                                                              if (isset($_GET['exam_id'])) 
                                                                                      {
                                                                                        // Grab the data from the GET  
                                                                                        $exam_id = ($_GET['exam_id']);
                                                                                        $duration = ($_GET['duration']);      
                                                                                      }

                                                                              $query = "SELECT * FROM `questions` WHERE exam_id = '$exam_id' ORDER by sort_order";
                                                                              $data = mysqli_query($dbc, $query)
                                                                                      or die(mysqli_error());

                                                        
                       
                        echo'<h6><form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="questions_submit.php">
                       <table width="100%" class="table table-striped table-bordered table-hover"id="dtexample" data-page-length="1">
                          <thead>
                              <th><div style="text-align: center; font-size: 20px; color: green; id="clockdiv"> 

                                
                                  D <span class="days" id="day"></span>:

                                  
                                  H <span class="hours" id="hour"></span>:

                                  
                                  M <span class="minutes" id="minute"></span>:

                                   
                                  S <span class="seconds" id="second"></span> 


                              <p id="demo"></p></div>'?> 



                              <script> 

                              var duration = <?php echo $duration?>;
                              var deadline = new Date(); 
                              deadline.setMinutes(deadline.getMinutes() + duration);

                              

                              var x = setInterval(function() { 

                              var now = new Date().getTime(); 
                              var t = deadline - now; 
                              var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
                              var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
                              var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
                              var seconds = Math.floor((t % (1000 * 60)) / 1000); 
                              document.getElementById("day").innerHTML =days ; 
                              document.getElementById("hour").innerHTML =hours; 
                              document.getElementById("minute").innerHTML = minutes; 
                              document.getElementById("second").innerHTML =seconds; 
                              if (t < 0) { 
                                  clearInterval(x); 
                                  document.getElementById("demo").innerHTML = "TIME UP"; 
                                  document.getElementById("day").innerHTML ='0'; 
                                  document.getElementById("hour").innerHTML ='0'; 
                                  document.getElementById("minute").innerHTML ='0' ; 
                                  document.getElementById("second").innerHTML = '0'; } 
                              }, 1000); 
                              </script> 
                          <?php echo '</th>
                          </thead>
                          <tbody>';
                          while ($row = mysqli_fetch_array($data)) 
                          { 
                          echo'
                          <tr>
                              <td><input type="hidden"class="form-control" id="question_id[]" name="question_id[]" value=" '. $row['question_id'] . '" />
                                <br><p>' . $row['question_text'] . '</p>
                                <br><p><b>Choice A: </b> ' . $row['choice_a'] . '</p>
                                <br><p><b>Choice B: </b>' . $row['choice_b'] . '</p>
                                <br><p><b>Choice C: </b>' . $row['choice_c'] . '</p>
                                <br><p><b>Choice D: </b>' . $row['choice_d'] . '</p>

                              <br>
                              <select class="form-control" for="answer[]" name="answer[]" id="answer[]" value="">
                                                  <option value="1">-- Select The Correct Answer</option>
                                                  <option value="1">A</option>
                                                  <option value="2">B</option>
                                                  <option value="3">C</option>
                                                  <option value="4">D</option>
                               </select>';
                               $user_id = $_SESSION['user_id'] ;
                               echo'
                              
                              <br><input type="hidden"class="form-control" id="user_id[]" name="user_id[]" value=" '. $user_id . '" />
                             </td>
                          </tr>';
                           }

                      echo'
                        </tbody>
                      </table>
                     

                       <input type="submit" name="submit" value="SUBMIT" /></form></h6>';
                       ?>

                                				
		  </div>
		</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">     
    $(document).ready(function () 
    {
    $('#dtexample').DataTable();
    } 
    );
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>