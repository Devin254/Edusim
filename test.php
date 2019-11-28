<?php
  // Insert the page header
  $page_title = 'Edusim - Dashboard';
  
  require_once('header.php');
  require_once('examiner_db.php');
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
        <h6>
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

                                                        
                       
                        echo'<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="questions_submit.php">
                       <table width="100%" class="table table-striped table-bordered table-hover"id="dtexample" data-page-length="1">
                          <thead>
                              <th>00:00:00</th>
                          </thead>
                          <tbody>';
                          while ($row = mysqli_fetch_array($data)) 
                          { 
                          echo'
                          <tr>
                              <td><input name="question_id[]" type="text"/>
                                <br><p>' . $row['question_text'] . '</p>
                                <br><p>Choice A: ' . $row['choice_a'] . '</p>
                                <br><p>Choice B: ' . $row['choice_b'] . '</p>
                                <br><p>Choice C: ' . $row['choice_c'] . '</p>
                                <br><p>Choice D: ' . $row['choice_d'] . '</p>

                              <br>
                              <select class="form-control" for="answer[]" name="answer[]" id="answer[]" value="">
                                                  <option value="1">A</option>
                                                  <option value="2">B</option>
                                                  <option value="3">C</option>
                                                  <option value="4">D</option>
                               </select>
                              
                              <br><input name="user_id[]" type="text" />
                             </td>
                          </tr>'
                           }

                      echo'
                        </tbody>
                      </table>
                      </h6>

                       <input type="submit" name="submit" value="Submit" />';
                       ?>
                       
      </div>        
      </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>