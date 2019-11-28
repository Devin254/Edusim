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

          <form class="form-horizontal" role="form" method="post" action="questions_submit.php">
            <input type="hidden"class="form-control" id="question_id" name="question_id" value=" '. $row['question_id'] . '" />
            <p style="color: green;"><b>Question 1</b></p>
                <p><b></b> 
                </p><p><input type="radio" name="radio" value="1">Option 1</p>
                  <br><p><input type="radio" name="radio" value="2">Option 2 </p>
                  <br><p><input type="radio" name="radio" value="3">Option 3</p>
                  <br><p><input type="radio" name="radio" value="4">Option 4</p>
                  <input type="hidden"class="form-control" id="question_id" name="question_id" value=" '. $row['question_id'] . '" />
                  <p style="color: green;"><b>Question 2</b></p>
                      <p><b></b> 
                </p><p><input type="radio" name="radio1" value="1">Option 1</p>
                  <br><p><input type="radio" name="radio1" value="2">Option 2</p>
                  <br><p><input type="radio" name="radio1" value="3">Option 3</p>
                  <br><p><input type="radio" name="radio1" value="4">Option 4</p>
                  <input style="color: white; font-weight: bold;" type="submit" value="SUBMIT" class="btn btn-success" name="submit" />
        </form>

      </div>        
      </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>