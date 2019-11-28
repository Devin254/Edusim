<?php
  // Insert the page header
  $page_title = 'Edusim - Dashboard';
  require_once('session_start.php');
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
	  						<h6><i class="glyphicon glyphicon-time"></i>  <b>START EXAMINATIONS</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>

		  	<div class="content-box-large">
			<div class="panel-body">
			<?php

            // Connect to the database
            $tt = mysqli_connect('localhost', 'root', '', 'test');


            if (isset($_GET['category_name']) && isset($_GET['subject_name']) && isset($_GET['exam_name']) && isset($_GET['duration']) && isset($_GET['grade_level']) && isset($_GET['exam_status']) && isset($_GET['exam_id'])) 

            {
              // Grab the data from the GET
              
              $category_name = ($_GET['category_name']);
              $subject_name = ($_GET['subject_name']);
              $exam_name = ($_GET['exam_name']);
              $duration = ($_GET['duration']);
              $grade_level = ($_GET['grade_level']);
              $exam_status = ($_GET['exam_status']);
              $exam_id = ($_GET['exam_id']);

            
            
           	
			echo'<h6><table width="100%" class="table table-striped table-bordered table-hover" id="">
	            <thead>
	                <tr>
	                    <th>EXAMINATION DETAILS</th>
	                    <th><b> <p style="color: green; font-weight: bold;"><i class="glyphicon glyphicon-gift"></i> SUCCESS IN YOUR EXAMS </p></b>
	                    </th>
	                </tr>
	            </thead>
	            <tbody>	
	            <tr class="odd gradeX">
	            <td><b>EXAM CATEGORY</b></td>
	            <td>';
	        echo $category_name;
	        echo'</td>
                </tr>
	            <tr class="odd gradeX">
	            <td><b>EXAM SUBJECT</b></td>
	            <td>';
	        echo $subject_name;
	        echo'</td>
	            </tr>	
	            <tr class="odd gradeX">
	            <td><b>EXAM NAME</b></td>
	            <td>';
            echo $exam_name;
	        echo'</td>
	            </tr>
	            <tr class="odd gradeX">
	            <td><b>Grade Level</b></td><td>';
	        echo $grade_level;
	        echo'</td>
	            </tr>
	            <tr class="odd gradeX">
	            <td><b>Duration</b></td>
	            <td>';
	        echo $duration;
	        echo'</td>
	            </tr>	
	            <tr class="odd gradeX">
	            <td><b>TOTAL MARKS AWARDED</b></td>
	            <td>100 %</td>
	            <tr class="odd gradeX">
	            <td><b>RULES</b></td>
	            <td>1. PLEASE DO NOT LEAVE THIS PAGE AFTER YOU HAVE STARTED THE EXAM.<br>
	            1. PLEASE DO NOT LEAVE THIS PAGE AFTER YOU HAVE STARTED THE EXAM.<br>
	            1. PLEASE DO NOT LEAVE THIS PAGE AFTER YOU HAVE STARTED THE EXAM.<br>
	            1. PLEASE DO NOT LEAVE THIS PAGE AFTER YOU HAVE STARTED THE EXAM.<br>
	            1. PLEASE DO NOT LEAVE THIS PAGE AFTER YOU HAVE STARTED THE EXAM.<br>
	            </td>
	            </tr>
	            <tr class="odd gradeX">
	            <td><b>Action</b></td>
	            <td><a href="exams_start.php?exam_id=' . $exam_id . '&amp;duration=' . $duration . '"><b class="text-info" style="font-size: 15px; text-align: center;">BEGIN THIS EXAM</b><b>&emsp;</b></a></td>


	           

	            </tr>	
	            </tbody>
	            </table>
	            </h6>';
	        }
	             ?>		
		  	</div>				
		  </div>
		</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script type="text/javascript">     
    $(document).ready( function () 
    {
    $('#startExamList').DataTable();
    } 
    );
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>