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
                              }

                      $query = "SELECT * FROM `questions` WHERE exam_id = '$exam_id' ORDER by sort_order";
                      $data = mysqli_query($dbc, $query)
                              or die(mysqli_error());

                      // Loop through the array of user data, formatting it as HTML 
                                echo '<h6><table width="100%" class="table table-striped table-bordered table-hover"id="dtexample" data-page-length="1">
                                                    <thead>
                                                        <tr>
                                                            <th style="color: green; font-size: 20px; text-align: center;">00 : 00 : 00 
                                                            </th>
                                                        </tr>
                                                    </thead><tbody>';

                                                    while ($row = mysqli_fetch_array($data)) 
                                                    { 
                                                   echo' 
                                                      <tr style="border: none;">
                                                        <td><p style="color: green;"><b>Question ' . $row['sort_order'] . ': (2 mks)</b></p>
                                                            <p><b>' . $row['question_text'] . '</b> 
                                                            </p><p><input type="radio" name="gender" value="other">
                                                        ' . $row['choice_a'] . '</p>
                                                        <br><p><input type="radio" name="gender" value="other">
                                                        ' . $row['choice_b'] . '</p>
                                                        <br><p><input type="radio" name="gender" value="other">
                                                        ' . $row['choice_c'] . '</p>
                                                        <br><p><input type="radio" name="gender" value="other">
                                                        ' . $row['choice_d'] . '</p>
                                                          </td>
                                                         </tr>';
                                                     }

                      echo'</tbody></table><div><p style="color: green; font-size: 15px; text-align: center; border: 1px solid green; padding: 15px;"><a href="exams_start.php"><b class="text-success"><i class="glyphicon glyphicon-ok"></i> I AM DONE. FINISH THIS EXAM</b><b>&emsp;</b></a></p></div></h6>';
                      mysqli_close($dbc);
               ?> 				
		  	</div>				
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