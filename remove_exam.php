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
                            <h6><b>DELETE EXAM PAPER</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
            <?php


                                    if (isset($_GET['exam_id'])) 

                                    {
                                      // Grab the score data from the GET
                                      $exam_id = ($_GET['exam_id']);
                                      //Connect to the database
                                      $dbc = mysqli_connect('localhost', 'root', '', 'test');
                                      // Delete the user data from the database
                                      $query = "DELETE FROM `exams` WHERE `exams`.`exam_id` = '$exam_id'";
                                                mysqli_query($dbc, $query);
                                                mysqli_close($dbc);
                                                // Confirm success with the user
                                                echo ' <div class="text-success"><strong><h6>THE RECORD HAS BEEN SUCCESSFULY DELETED</strong></h6></strong></div>';

                                      
                                    }

                                    else 
                                    {
                                      echo '<div class="text-success"><strong><h6>OOPS! SOMETHING WENT WRONG</strong></h6></strong></div>';
                                    }
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