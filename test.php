<?php
  // Insert the page header
  $page_title = 'Edusim - Dashboard';
  
  require_once('header.php');
  require_once('examiner_db.php');
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
                <h6><i class="glyphicon glyphicon-dashboard"></i>  <b>DASHBOARD</b></h6> 
              </div>
            </div>        
          </div>
        </div>

        <div class="content-box-large">
        <div class="panel-body">  
          
        <form action="" method="post">
        
        </form>
        <?php
                                  //Script - Store Subject Information

                                  if (isset($_POST['submit'])) 
                                  {

                                    // Grab the data from post
                                    
                                    $radio = ($_POST['radio']);
                                    $question_id = ($_POST['question_id']);
                                    
                                    
                                    


                                      if (!empty($radio) && !empty($question_id))

                                        {
                                                     //Connect to the database
                                                     $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                             $query = "INSERT INTO `provided_answers` (`pa_id`, `question_id`, `answers`) VALUES (NULL, '$question_id', '$radio')";    
                                                             mysqli_query($tt, $query);
                                                           // Confirm success with the user
                                                           
                                                            echo '<div class="text-success"><strong><h6>THE RECORD WAS UPDATED SUCCESFULLY</strong></h6></strong></div>';
                                                           
                                          }
                                        else 
                                          {
                                            echo '<div class="text-error"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>OPPS! SOMETHING WENT WRONG</strong></h6></strong></div>';
                                          }
                                              // Clear the number data to clear the form
                                                      
                                                        $radio = '';
                                                        

                                  }
                                 ?>
        <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden"class="form-control" id="question_id" name="question_id" value="32" />
        <div class="form-group">
          <input type="radio" name="radio" value="1">Radio 1
          <input type="radio" name="radio" value="2">Radio 2
          <input type="radio" name="radio" value="3">Radio 3
          <input type="submit" name="submit" value="Submit" />
        </div>
        </form>

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