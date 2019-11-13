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
                            <h6><i class="glyphicon glyphicon-list-alt"></i>  <b>CATEGORY</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>DELETE EXAM CATEGORY</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
                                 <?php


                                  if (isset($_GET['category_id']) && isset($_GET['category_type']) && isset($_GET['category_name']) && isset($_GET['start_date']) && isset($_GET['end_date'])&& isset($_GET['grade_level']) && isset($_GET['category_status'])) 

                                  {
                                    // Grab the score data from the GET
                                    $category_id = ($_GET['category_id']);
                                    $category_type = ($_GET['category_type']);
                                    $category_name = ($_GET['category_name']);
                                    $start_date = ($_GET['start_date']);
                                    $end_date = ($_GET['end_date']);
                                    $grade_level = ($_GET['grade_level']);
                                    $category_status = ($_GET['category_status']);

                                    //Connect to the database
                                    $dbc = mysqli_connect('localhost', 'root', '', 'test');
                                    // Delete the user data from the database
                                    $query = "DELETE FROM `category` WHERE `category`.`category_id` = '$category_id'";
                                              mysqli_query($dbc, $query);
                                              mysqli_close($dbc);
                                            // Confirm success with the user
                                              echo ' <div class="text-success"><strong><h6>THE RECORD HAS BEEN SUCCESSFULY DELETED</strong></h6></strong></div>';

                                    
                                  }

                                  else 
                                  {
                                    echo '<div class="text-danger"><strong><h6>OOPS! SOMETHING WENT WRONG</strong></h6></strong></div>';
                                  }
                                  ?>
                  <div class="panel-body">              
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