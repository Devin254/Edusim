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
                            <h6><i class="glyphicon glyphicon-scale"></i><b> EXAMS RESULTS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>EXAMINATION RESULTS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-body">
                     <?php
                    $dbc = mysqli_connect('localhost', 'root', '', 'test');

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
                                    echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                                <thead>
                                                                    <tr>
                                                                        <th>NO</th>
                                                                        <th>Full Names</th>
                                                                        <th>Identification</th>
                                                                        <th>Maths</th>
                                                                        <th>English</th>
                                                                        <th>Kiswahili</th>
                                                                        <th>Science</th>
                                                                        <th>Social Studies</th>
                                                                        <th>Total Marks(500)</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    ';

                                    
                                    $query2 = "SELECT user_id FROM `exam_register` WHERE category_id = '$category_id'";
                                    $data2 = mysqli_query($dbc, $query2)
                                    or die(mysqli_error());
                                    $b = 5;
                                     while ($row = mysqli_fetch_array($data2)) 
                                                {
                                                     $user_id = $row['user_id'];

                                                    $query = "SELECT exams. exam_name, performance. score, performance. user_id, people. first_name, people. other_names, people. identification, category. category_id, category. category_name, subjects. subject_name FROM performance INNER JOIN exams ON exams. exam_id = performance. exam_id INNER JOIN people ON performance. user_id = people. user_id INNER JOIN category ON category. category_id = exams. category_id INNER JOIN subjects ON exams. subject_id = subjects. subject_id WHERE category. category_id = '$category_id' AND performance. user_id = '$user_id' ";
                                                    $data = mysqli_query($dbc, $query)
                                                    or die(mysqli_error());
                                                    $query3 = "SELECT exams. exam_name, performance. score, performance. user_id, people. first_name, people. other_names, people. identification, category. category_id, category. category_name, subjects. subject_name FROM performance INNER JOIN exams ON exams. exam_id = performance. exam_id INNER JOIN people ON performance. user_id = people. user_id INNER JOIN category ON category. category_id = exams. category_id INNER JOIN subjects ON exams. subject_id = subjects. subject_id WHERE category. category_id = '$category_id' ";
                                                    $data3 = mysqli_query($dbc, $query3)
                                                    or die(mysqli_error());
                                                    $rows = mysqli_num_rows($data);
                                                    echo $rows;

                                                   
                                                        if (mysqli_num_rows($data) == 0) 
                                                                            
                                                            {
                                                               echo '';
                                                            }
                                                    else {

                                                    
                                                                    $final_score = 0;

                                                                    $rowb = mysqli_fetch_array($data);
                                                                    $count = 1;
                                                                    
                                                                  
                                                                    echo'<tr class="odd gradeX">
                                                                        <td>'. $count .' </td>   
                                                                        <td>' . $rowb['first_name'] . ' ' . $rowb['other_names'] . '</td>
                                                                        <td>' . $rowb['identification'] . '</td>';
                                                                    echo'<td>' . $rowb['score'] . '</td>';

                                                                    while ($row = mysqli_fetch_array($data)) 
                                                                    {
                                                                       echo'<td>' . $row['score'] . '</td>
                                                                         ';
                                                                         
                                                                             
                                                                         
                                                                        $final_score += $row['score'];
                                                                        $count = $count++;
                                                                    }
                                                                    $dev = 5 - $rows;
                                                                    while ($dev >= 1) 
                                                                    {
                                                                        echo' 
                                                                        <td> N/D</td> ';
                                                                        $dev--;
                                                                    }
                                                                    
                                                                    echo' 
                                                                        <td>' . $final_score . '</td>                                                                  
                                                                        <td></td>
                                                                        
                                                                        </tr>';
                                                                        
                                                                                                     
                                                            
                                                        }

                                                       

                                                   }
                                                   echo'</tbody>
                                                            </table>
                                                        </h6>';
                                                   if (mysqli_num_rows($data3) == 0) 
                                                                            
                                                    {
                                                       echo '<div class="alert alert-warning" style="width: 42%; position: relative; float: left; left: 34%;"><p class="mb-0"><strong><h6><i class="glyphicon glyphicon-info-sign"></i> &nbsp;There are no result records available for this category</strong></h6></strong></p></div>';
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