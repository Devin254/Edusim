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
			<h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
										                                <td>TARGETER SERIES EXAMS</td>
										                                </tr>
										                                <tr class="odd gradeX">
										                                <td><b>EXAM SUBJECT</b></td>
										                                <td>ENGLISH</td>
										                                </tr>	
										                                <tr class="odd gradeX">
										                                <td><b>EXAM NAME</b></td>
										                                <td>TARGETER SERIES EXAMS ENGLISH PAPER</td>
										                                </tr>
										                                <tr class="odd gradeX">
										                                <td><b>Grade Level</b></td>
										                                <td>Grade VI</td>
										                                </tr>
										                                <tr class="odd gradeX">
										                                <td><b>Duration</b></td>
										                                <td>60 MINUTES</td>
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
										                                <td><input style="color: white; font-weight: bold; text-align: center;" type="submit" value="START THIS EXAM" class="btn btn-success" name="submit" /></td>
										                                </tr>	
										                                </tbody>
										                                </table>
										                                </h6>		
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