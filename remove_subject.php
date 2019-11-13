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
                <h6><i class="glyphicon glyphicon-calendar"></i>  <b>SUBJECTS</b></h6> 
              </div>
            </div>        
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 panel-warning">
            <div class="content-box-header panel-heading">
              <div class="panel-title ">
                <h6><b>DELETE SUBJECT</b></h6> 
              </div>
            </div>        
          </div>
        </div>

        <div class="content-box-large">
                              <?php


                                    if (isset($_GET['subject_name']) && isset($_GET['subject_status'])) 

                                    {
                                      // Grab the score data from the GET
                                      $subject_name = ($_GET['subject_name']);
                                      $subject_status = ($_GET['subject_status']);
                                      //Connect to the database
                                      $dbc = mysqli_connect('localhost', 'root', '', 'test');
                                      // Delete the user data from the database
                                      $query = "DELETE FROM `subjects` WHERE `subjects`.`subject_name` = '$subject_name'";

                                                mysqli_query($dbc, $query);
                                        mysqli_close($dbc);
                                        // Confirm success with the user
                                        echo ' <div class="text-success"><strong><h6>THE RECORD HAS BEEN SUCCESSFULY DELETED</strong></h6></strong></div>';

                                      
                                    }

                                    else 
                                    {
                                      echo '<p class="error" Error fetching data! </p>';
                                    }
                                    ?>
                
        <div class="panel-body">

                        
        </div>

                              
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