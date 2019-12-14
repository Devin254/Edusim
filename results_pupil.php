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
                     if (isset($_GET['category_id'])) 

                                    {
                                      // Grab the score data from the GET
                                      $category_id = ($_GET['category_id']);
                                      $category_name = ($_GET['category_name']);
                                      //Connect to the database
                                      $dbc = mysqli_connect('localhost', 'root', '', 'test');

                                      
                                    }

                                    else 
                                    {
                                      echo '<div class="text-success"><strong><h6>OOPS! SOMETHING WENT WRONG</strong></h6></strong></div>';
                                    }

                    $query = "SELECT exams. exam_name, performance. score, performance. user_id, people. first_name, people. other_names, category. category_id, category. category_name, subjects. subject_name FROM performance INNER JOIN exams ON exams. exam_id = performance. exam_id INNER JOIN people ON performance. user_id = people. user_id INNER JOIN category ON category. category_id = exams. category_id INNER JOIN subjects ON exams. subject_id = subjects. subject_id WHERE performance. user_id = '$user_id' AND category. category_id = '$category_id'";
                    $data = mysqli_query($dbc, $query)
                    or die(mysqli_error());
                    if (mysqli_num_rows($data) < 5 && mysqli_num_rows($data) != 0) 
                                            
                    {
                        echo '<div class="alert alert-warning" style="width: 75%; position: relative; float: left; left: 13%;"><p class="mb-0"><strong><h6><i class="glyphicon glyphicon-info-sign"></i> &nbsp;Your results are not complete. Complete the rest of the exam papers to view a full result</strong></h6></strong></p></div>';

                    }
                    elseif (mysqli_num_rows($data) == 0) 
                    {
                        echo '<div class="alert alert-warning" style="width: 29%; position: relative; float: left; left: 34%;"><p class="mb-0"><strong><h6><i class="glyphicon glyphicon-info-sign"></i> &nbsp; You have not done any exams yet.</strong></h6></strong></p></div>';
                    }
                    elseif (mysqli_num_rows($data) == 5) 
                    {
                        echo '<div class="alert alert-success" style="width: 24%; position: relative; float: left; left: 38%;"><p class="mb-0"><strong><h6><i class="glyphicon glyphicon-info-sign"></i> &nbsp; Complete subject marks</strong></h6></strong></p></div>';
                    }




                    echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
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
                                        <td>' . $row['exam_name'] . '</td>
                                        <td>' . $row['subject_name'] . '</td>
                                        <td>' . $row['score'] . '</td>
                                         </tr>';
                                        $final_score += $row['score'];
                                    }
                                    
                                    echo'<tr class="odd gradeX">   
                                        <td>TOTAL</td>
                                        <td><a href="pdf/textwrapping.php?user_id=' . $user_id .'" style="font-size: 20px;"><b class="text-success"><i class="glyphicon glyphicon-print"></b></a></td>
                                        <td>';echo $final_score; echo'</td>
                                      </tr>
                                        
                                                                     
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