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
                    $query = "SELECT first_name, other_names FROM people WHERE user_id = '$user_id'";
                    $data = mysqli_query($dbc, $query)
                    or die(mysqli_error());

                    echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Exam Category Name</th>
                                        <th>Names</th>
                                        <th>Position</th>
                                        <th>Maths</th>
                                        <th>English</th>
                                        <th>Kiswahili</th>
                                        <th>Science</th>
                                        <th>SS & CRE</th>
                                        <th>Total Marks(500)</th>
                                        <th>Action</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>ELDAMA RAVINE DIVISION END TERM</td>';
                                  while ($row = mysqli_fetch_array($data)) 
                                    {
                                    echo'
                                        <td>' . $row['first_name'] . ' ' . $row['other_names'] . '</td>';
                                    }
                                    echo '
                                        <td>21</td>
                                        <td>49</td>
                                        <td>49</td>
                                        <td>49</td>
                                        <td>49</td>
                                        <td>49</td>
                                        <td>327</td>
                                         <td class="center"><button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></button></td>
                                        
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