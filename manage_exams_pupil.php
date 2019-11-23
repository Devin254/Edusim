<?php
  // Insert the page header
  $page_title = 'Edusim - Category';
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
                            <h6><i class="glyphicon glyphicon-pencil"></i><b> EXAMS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>AVAILABLE EXAMS AND TESTS FOR YOU</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-body">
<?php

                     // Retrieve the subject data from MySQL
                      $dbc = mysqli_connect('localhost', 'root', '', 'test');
                      $user_id = $_SESSION['user_id'];
                       $query = "SELECT exams. exam_id, exams. exam_name, exams. duration, exams. grade_level, exams. exam_status, subjects. subject_name, category. category_name, exam_register. user_id FROM exams INNER JOIN category ON category. category_id = exams .category_id INNER JOIN subjects ON subjects. subject_id = exams .subject_id INNER JOIN exam_register ON exam_register. category_id = exams .category_id WHERE exam_register .user_id = '$user_id'";
                      $data = mysqli_query($dbc, $query)
                      or die(mysqli_error());

                      if (mysqli_num_rows($data) == 0)
                      {
                          echo '<div class="alert alert-warning alert-dismissible" style="size: 30px;">
                                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                        <h6><strong><i class="glyphicon glyphicon-ok-danger"></i><strong></strong> THERE ARE NO EXAMS AVAILABLE FOR YOU. TRY REGISTERING FOR EXAMS</h6>
                                                                   </div>';
                      }

                      else
                      {

                      // Loop through the array of user data, formatting it as HTML 
                                echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Exam Category Name</th>
                                        <th>Subject</th>
                                        <th>Exam Paper Name</th>
                                        <th>Duration(m)</th>
                                        <th>Grade Level</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>';
                     while ($row = mysqli_fetch_array($data)) 
                     { 
                      // Display the subject information
                      
                      echo '<tr class="odd gradeX"><td>' . $row['category_name'] . '</td>';
                      echo '<td>' . $row['subject_name'] . '</td>';
                      echo '<td>' . $row['exam_name'] . '</td>';
                      echo '<td>' . $row['duration'] . '</td>';
                      echo '<td>' . $row['grade_level'] . '</td>';                    
                      $cat = $row['exam_status']; 

                      
                      if ($cat == 1) 
                      {
                          echo '<td class="center"><a href="start_exam.php?category_name=' . $row['category_name'] . '&amp;subject_name=' . $row['subject_name'] . '&amp;exam_name=' . $row['exam_name'] . '&amp;duration=' . $row['duration'] . '&amp;grade_level=' . $row['grade_level'] . '&amp;exam_status=' . $row['exam_status'] .  '&amp;exam_id=' . $row['exam_id'] . '"><b class="text-success"> START</b></a><b>&emsp;</b></td>';
                          echo '<td class=""><p class="text-success"><i class="glyphicon glyphicon-ok"></i></p></td></tr>';
                          
                          
                      }
                      else
                        {      echo '<td class="center"><a href=""><b class="text-danger"> START</b></a><b>&emsp;</b></td>';
                          echo '<td class=""><p class="text-warning"><i class="glyphicon glyphicon-lock"></i></p></td>';
                      }
  
                     }
                      echo '</thead> </table>';

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