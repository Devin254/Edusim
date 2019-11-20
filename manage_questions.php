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
	  						<h6><i class="glyphicon glyphicon-dashboard"></i>  <b>DASHBOARD</b></h6> 
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
                      
                    
                    }

                    else 
                    {
                      echo '';
                    }

                    echo '<p style="font-size: 13px; color: green;"> YOU ARE STILL EDITING</p>';

                    if (isset($_POST['submit'])) 
                    {

                      // Grab the data from post
                      
                      
                      $exam_id = ($_POST['exam_id']);
                      $question_text = ($_POST['question_text']);
                      $sort_order = ($_POST['sort_order']);
                      $choice_a = ($_POST['choice_a']);
                      $choice_b = ($_POST['choice_b']);
                      $choice_c = ($_POST['choice_c']);
                      $choice_d = ($_POST['choice_d']);
                      $answer = ($_POST['answer']);

                      
                      


                        if (!empty($exam_id) && !empty($question_text) && !empty($sort_order) && !empty($choice_a) && !empty($choice_b) && !empty($choice_c) && !empty($choice_d) && !empty($answer))

                          {
                                       //Connect to the database
                                       $tt = mysqli_connect('localhost', 'root', '', 'test');
                                       $query = "INSERT INTO `questions` (`question_id`, `exam_id`, `question_text`, `sort_order`, `choice_a`, `choice_b`, `choice_c`, `choice_d`, `answer`) VALUES (NULL, '$exam_id', '$question_text', '$sort_order', '$choice_a', '$choice_b', '$choice_c', '$choice_d', '$answer')";

                                      mysqli_query($tt, $query);
                                      // Confirm success with the user
                                             
                                      echo '<div class="text-success"><strong><h6>THE QUESTION WAS UPDATED SUCCESFULLY</strong></h6></strong></div>';
                                             
                            }
                          else 
                            {
                              echo '<div class="text-error"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>OPPS! SOMETHING WENT WRONG</strong></h6></strong></div>';
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
                    <p>Questions Listing:</p>
                    <button class="collapsible">Open Question</button>
                    <div class="content">
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>QUESTION</th>
                                                            <td>Edit 
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                 
                                                    <tr>
                                                      <td>Question</td>
                                                      <td>Who is the president of Kenya</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice A</td>
                                                      <td>Uhuru Kenyatta</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice B</td>
                                                      <td>Jomo Kenyatta</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice C</td>
                                                      <td>Raila Odinga</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice D</td>
                                                      <td>None of the above</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Answer</td>
                                                      <td>Choice D</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                                  
                    </div>
                    <button class="collapsible">Open Question</button>
                    <div class="content">
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>QUESTION</th>
                                                            <td>Edit 
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                 
                                                    <tr>
                                                      <td>Question</td>
                                                      <td>Who is the president of Kenya</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice A</td>
                                                      <td>Uhuru Kenyatta</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice B</td>
                                                      <td>Jomo Kenyatta</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice C</td>
                                                      <td>Raila Odinga</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice D</td>
                                                      <td>None of the above</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Answer</td>
                                                      <td>Choice D</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                    </div>
                    <button class="collapsible">Open Question</button>
                    <div class="content">
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>QUESTION</th>
                                                            <td>Edit 
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                 
                                                    <tr>
                                                      <td>Question</td>
                                                      <td>Who is the president of Kenya</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice A</td>
                                                      <td>Uhuru Kenyatta</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice B</td>
                                                      <td>Jomo Kenyatta</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice C</td>
                                                      <td>Raila Odinga</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Choice D</td>
                                                      <td>None of the above</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Answer</td>
                                                      <td>Choice D</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
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