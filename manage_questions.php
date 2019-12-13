<?php
  // Insert the page header
  $page_title = 'Edusim - Dashboard';
  require_once('session_start.php');
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
	  						<h6><i class="glyphicon glyphicon-dashboard"></i>  <b>QUESTIONS PANEL</b></h6> 

	  					</div>
		  			</div>  			
		  		</div>
		  	</div>

		  	<div class="content-box-large">
          <?php
                    //
                    if (isset($_GET['exam_id']) && isset($_GET['exam_name'])) 

                    {
                    // Grab the data from the GET
                      
                      $exam_id = ($_GET['exam_id']);
                      $exam_name = ($_GET['exam_name']);
                      echo '<p style="font-size: 17px; color: green; text-align: center; font-weight: bold;">' . $exam_name .'</p>';

                      
                    
                    }

                    else 
                    {
                      echo '';
                    }

                    

                    

                    if (isset($_POST['submit'])) 
                    {

                      // Grab the data from post
                      
                      $exam_name = ($_POST['exam_name']);
                      $exam_id = ($_POST['exam_id']);
                      $question_text = ($_POST['question_text']);
                      $sort_order = ($_POST['sort_order']);
                      $choice_a = ($_POST['choice_a']);
                      $choice_b = ($_POST['choice_b']);
                      $choice_c = ($_POST['choice_c']);
                      $choice_d = ($_POST['choice_d']);
                      $answer = ($_POST['answer']);

                      echo '<p style="font-size: 17px; color: green; text-align: center; font-weight: bold;">' . $exam_name .'</p>';
                      
                      
                      


                        if (!empty($exam_id) && !empty($question_text) && !empty($sort_order) && !empty($choice_a) && !empty($choice_b) && !empty($choice_c) && !empty($choice_d) && !empty($answer))

                          {
                                       //Connect to the database
                                       $tt = mysqli_connect('localhost', 'root', '', 'test');
                                       $query = "INSERT INTO `questions` (`question_id`, `exam_id`, `question_text`, `sort_order`, `choice_a`, `choice_b`, `choice_c`, `choice_d`, `answer`) VALUES (NULL, '$exam_id', '$question_text', '$sort_order', '$choice_a', '$choice_b', '$choice_c', '$choice_d', '$answer')";

                                      mysqli_query($tt, $query);
                                      // Confirm success with the user
                                             
                                      echo '<div class="alert alert-success" style="width: 32%; position: relative; float: left; left: 33%;"><p class="mb-0"><strong><h6><i class="glyphicon glyphicon-ok"></i> &nbsp;The question was updated successfully</strong></h6></strong></p></div>';
                                             
                            }
                          else 
                            {
                              echo '<div class="alert alert-danger" style="width: 32%; position: relative; float: left; left: 34%;"><p class="mb-0"><strong><h6><i class="glyphicon glyphicon-remove"></i> &nbsp;Please enter all the information provided</strong></h6></strong></p></div>';
                            }
                                // Clear the number data to clear the form
                                          $question_text = '';
                                          $sort_order = '';
                                          $choice_a = '';
                                          $choice_b = '';
                                          $choice_c = '';
                                          $choice_d = '';
                                          $answer = '';
                                

                    }
          ?>
				        <div class="panel-body">
					        <h6>
                   
                                    <?php

                                    // Retrieve the subject data from MySQL
                                    $dbc = mysqli_connect('localhost', 'root', '', 'test');
                                    $query = "SELECT * FROM `questions` WHERE exam_id = '$exam_id' ORDER by sort_order;";
                                    $data = mysqli_query($dbc, $query)
                                    or die(mysqli_error());
                                    if (mysqli_num_rows($data) == 0) 
                                            {
                                              echo '<div class="alert alert-warning" style="width: 40%; position: relative; float: left; left: 31%;"><p class="mb-0"><strong><h6><i class="glyphicon glyphicon-info-sign"></i> &nbsp;There are no questions available. Try adding them</strong></h6></strong></p></div>';
                                            }

                                    else
                                    {

                                    // Loop through the array of user data, formatting it as HTML 

                                    while ($row = mysqli_fetch_array($data)) 
                                    { 
                                    // Display the subject information


                                    echo '<button class="collapsible">Open Question '. $row['sort_order'] .'</button>
                                                <div class="content">
                                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>QUESTION</th>
                                                                    <td><a href="edit_question.php?question_id=' . $row['question_id'] . '&amp;question_text=' . $row['question_text'] . '&amp;sort_order=' . $row['sort_order'] . '&amp;choice_a=' . $row['choice_a'] . '&amp;choice_b=' . $row['choice_b'] . '&amp;choice_c=' . $row['choice_c'] . '&amp;choice_d=' . $row['choice_d'] . '&amp;answer=' . $row['answer'] . '"><b class="text-success"> EDIT</b></a>
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>                 
                                                            <tr>
                                                              <td>Question</td>
                                                              <td>'. $row['question_text'] .'</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Choice A</td>
                                                              <td>'. $row['choice_a'] .'</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Choice B</td>
                                                              <td>'. $row['choice_b'] .'</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Choice C</td>
                                                              <td>'. $row['choice_c'] .'</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Choice D</td>
                                                              <td>'. $row['choice_d'] .'</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Answer</td>
                                                              <td>'. $row['answer'] .'</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                          
                                                </div>';
                                    }
                                    }
                                    mysqli_close($dbc);
                                    ?>
                  </h6>
                  </div>
                                                     
                   
                    <script>
                    var coll = document.getElementsByClassName("collapsible");
                    var i;

                    for (i = 0; i < coll.length; i++) {
                      coll[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var content = this.nextElementSibling;
                        if (content.style.maxHeight){
                          content.style.maxHeight = null;
                        } else {
                          content.style.maxHeight = content.scrollHeight + "px";
                        } 
                      });
                    }
                    </script>
                    <br>
                    <br>
                        
                        <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden"class="form-control" id="exam_name" name="exam_name" value="<?php if (!empty($exam_name)) echo $exam_name; ?>"/>
                                <input type="hidden"class="form-control" id="exam_id" name="exam_id" value="<?php if (!empty($exam_id)) echo $exam_id; ?>"/>
                                <div class="form-group">
                                <label for="question_text" class="col-sm-2 control-label">Question Text</label>
                                <div class="col-sm-8">
                                <input type="text" style= "height: 100px; width: 100%;" class="form-control" id="question_text" name="question_text" value="<?php if (!empty($question_text)) echo $question_text; ?>" />
                                </div>
                               </div>
                               <div class="form-group">
                                <label class="col-sm-2 control-label" for="sort_order">Sort Order</label>
                                <div class="col-sm-8">
                                <input type="textarea" class="form-control" id="sort_order" name="sort_order" value="<?php if (!empty($sort_order)) echo $sort_order; ?>" style="text-align: left;" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="choice_a">Choice A</label>
                                <div class="col-sm-8">
                                <input type="text" style= "height: 60px; width: 100%;" class="form-control" id="choice_a" name="choice_a" value="<?php if (!empty($choice_a)) echo $choice_a; ?>" style="text-align: left;" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="choice_1">Choice B</label>
                                <div class="col-sm-8">
                                <input style= "height: 60px; width: 100%;"type="text" class="form-control" id="choice_b" name="choice_b" value="<?php if (!empty($choice_b)) echo $choice_b; ?>" style="text-align: left;" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="choice_c">Choice C</label>
                                <div class="col-sm-8">
                                <input style= "height: 60px; width: 100%;" type="text" class="form-control" id="choice_c" name="choice_c" value="<?php if (!empty($choice_c)) echo $choice_c; ?>" style="text-align: left;" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="choice_d">Choice D</label>
                                <div class="col-sm-8">
                                <input style= "height: 60px; width: 100%;" type="text" class="form-control" id="choice_d" name="choice_d" value="<?php if (!empty($choice_d)) echo $choice_d; ?>" style="text-align: left;" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="answer">Answer</label>
                                <div class="col-sm-8">
                                <select class="form-control" for="answer" name="answer" id="answer" value="<?php if (!empty($answer)) echo $answer; ?>">
                                                  <option value="">-- Select Answer -- </option>
                                                  <option value="1">Choice A</option>
                                                  <option value="2">Choice B</option>
                                                  <option value="3">Choice C</option>  
                                                  <option value="4">Choice D</option>               
                                </select>
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
												    <script src="bootstrap/js/bootstrap.min.js"></script>
												    <script src="js/custom.js"></script>
												    <script type="text/javascript">     
												    $(document).ready(function () 
												    {
												    $('#dtexample').DataTable();
												    } 
												    );
												    </script>
  </body>
</html>