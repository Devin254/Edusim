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
                            <h6><i class="glyphicon glyphicon-scale"></i><b> EXAMS RESULTS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>EXAM CATEGORY LISTING RESULTS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-body">
                    <?php
                    $dbc = mysqli_connect('localhost', 'root', '', 'test');
                    $user_id = $_SESSION['user_id'] ;
                    $query = "SELECT exams. exam_name, performance. score, performance. user_id, people. first_name, people. other_names, category. category_name, subjects. subject_name FROM performance INNER JOIN exams ON exams. exam_id = performance. exam_id INNER JOIN people ON performance. user_id = people. user_id INNER JOIN category ON category. category_id = exams. category_id INNER JOIN subjects ON exams. subject_id = subjects. subject_id WHERE performance. user_id = '$user_id'";
                    $data = mysqli_query($dbc, $query)
                    or die(mysqli_error());

                    echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Exam Category Name</th>
                                        <th>Name</th>
                                        <th>Exam Paper Name</th>
                                        <th>Subject</th>
                                        <th>Score</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    ';
                                    $final_score = 0;
                                  while ($row = mysqli_fetch_array($data)) 
                                    {
                                    echo'<tr class="odd gradeX">   
                                        <td>' . $row['category_name'] . '</td>
                                        <td>' . $row['first_name'] . ' ' . $row['other_names'] . '</td>
                                        <td>' . $row['exam_name'] . '</td>
                                        <td>' . $row['subject_name'] . '</td>
                                        <td>' . $row['score'] . '</td>
                                         </tr>';
                                        $final_score += $row['score'];
                                    }
                                    
                                    echo'<tr class="odd gradeX">   
                                        <td>TOTAL</td>
                                        <td><a href="pdf/textwrapping.php?user_id=' . $user_id .'">PRINT</a></td>
                                        <td></td>
                                        <td></td>
                                        <td>';echo $final_score; echo'</td>
                                        <td></td> </tr>
                                        
                                                                     
                                </tbody>
                            </table>
                        </h6>';
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