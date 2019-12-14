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
                            <h6><b>EXAM CATEGORY LISTINGS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-body">
               <?php

                     // Retrieve the subject data from MySQL
                      $dbc = mysqli_connect('localhost', 'root', '', 'test');
                      $query = "SELECT * FROM `category`";
                      $data = mysqli_query($dbc, $query)
                      or die(mysqli_error());

                      // Loop through the array of user data, formatting it as HTML 
                                echo '<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dtexample">
                                <thead>
                                    <tr>
                                        <th>Exam Category Name</th>
                                        <th>End Date</th>
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
                      echo '<td>' . $row['end_date'] . '</td>';
                      echo '<td>' . $row['grade_level'] . '</td>';                    
                      echo '<td class="center"><a href="manage_results_detail.php?category_name=' . $row['category_name'] . '&amp;category_id=' . $row['category_id'] . '"><b class="text-success">VIEW RESULTS</b><b>&emsp;</b></a><a href=""><b class="text-info"><i class="glyphicon glyphicon-print"></b></a></td>';




                      $cat = $row['category_status']; 

                      
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

                      mysqli_close($dbc);
                  ?>                 
            </div>              
          </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
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