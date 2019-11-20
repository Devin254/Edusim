<?php
  // Insert the page header
  $page_title = 'Edusim - Category';
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
                            <h6><i class="glyphicon glyphicon-pencil"></i><b> EXAMS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>EXAM LISTINGS</b></h6> 
                        </div>
                      
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
                <?php
                        echo '<div class="text-warning"><strong><h6><a href="add_exam.php"><b class="text-success"><i class="glyphicon glyphicon-pencil"></i> ADD EXAM PAPER</b></a></h6></strong></div>';
                ?>
                <div class="panel-body">
                <?php

                     // Retrieve the subject data from MySQL
                      $dbc = mysqli_connect('localhost', 'root', '', 'test');
                      $query = "SELECT * FROM `exams`";
                      $data = mysqli_query($dbc, $query)
                      or die(mysqli_error());

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
                      
                      echo '<tr class="odd gradeX"><td>' . $row['category_id'] . '</td>';
                      echo '<td>' . $row['subject_id'] . '</td>';
                      echo '<td>' . $row['exam_name'] . '</td>';
                      echo '<td>' . $row['duration'] . '</td>';
                      echo '<td>' . $row['grade_level'] . '</td>';                    
                      echo '<td class="center"><a href="manage_questions.php?exam_id=' . $row['exam_id'] . '&amp;exam_name=' . $row['exam_name'] . '"><b class="text-info">QUESTIONS</b><b>&emsp;</b></a> <a href="edit_exam.php?exam_id=' . $row['exam_id'] . '&amp;category_id=' . $row['category_id'] . '&amp;subject_id=' . $row['subject_id'] . '&amp;exam_name=' . $row['exam_name'] . '&amp;duration=' . $row['duration'] . '&amp;grade_level=' . $row['grade_level'] . '&amp;exam_status=' . $row['exam_status'] .  '"><b class="text-success"> EDIT</b></a><b>&emsp;</b>';
                      echo '<b><a href="remove_exam.php?exam_id=' . $row['exam_id'] . '&amp;category_id=' . $row['category_id'] . '&amp;subject_id=' . $row['subject_id'] . '&amp;exam_name=' . $row['exam_name'] . '&amp;duration=' . $row['duration'] . '&amp;grade_level=' . $row['grade_level'] . '&amp;exam_status=' . $row['exam_status'] .  '"><b class="text-warning"> DELETE</b></a></td>';

                      $cat = $row['exam_status']; 

                      
                      if ($cat == 1) 
                      {
                          echo '<td class=""><p class="text-success"><i class="glyphicon glyphicon-ok"></i></p></td></tr>';
                          
                          
                      }
                      else
                      {
                          echo '<td class=""><p class="text-warning"><i class="glyphicon glyphicon-lock"></i></p></td>';
                      }
  
                     }
                      echo '</thead> </table>';
                      ?>
              
                </div>              
          </div>

        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">     
    $(document).ready( function () {
    $('#tbl').DataTable();
    } );
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>