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
	  						<h6><i class="glyphicon glyphicon-dashboard"></i>  <b>EXAMINATIONS HAVE STARTED</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>

		  	<div class="content-box-large">
			<div class="panel-body">

			<h6>
								<table width="100%" class="table table-striped table-bordered table-hover"id="dtexample" data-page-length="1">
										                                <thead>
										                                    <tr>
										                                        <th style="color: green; font-size: 20px; text-align: center;">00 : 00 : 00 
										                                        </th>
										                                    </tr>
										                                </thead>
										                                <tbody>
										                                	<tr style="border: none;">
										                                		<td><p style="color: green;"><b>Question 1 : (2 mks)</b></p>
																				<p><b>Who is the first president of the Republic of Kenya</b> 
										                                        </p><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                	    </td>
										                                     </tr>
										                                     <tr style="border: none;">
										                                		<td><p style="color: green;"><b>Question 2 : (2 mks)</b></p>
																				<p><b>Who of the following is not a president in Kenya?</b> 
										                                        </p><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                	    </td>
										                                     </tr>
										                                     <tr style="border: none;">
										                                		<td><p style="color: green;"><b>Question 3 : (2 mks)</b></p>
																				<p><b>Who of the following is going to be a president in Kenya?</b> 
										                                        </p><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                		<br><p><input type="radio" name="gender" value="other">
										                                		Raila Amolo Odinga</p>
										                                	    </td>
										                                     </tr>	
										                                    

										                                </tbody>
										                            </table>
										                             <div>
										                                     	<p style="color: green; font-size: 15px; text-align: center; border: 1px solid green; padding: 15px;"><a href="exams_start.php"><b class="text-success"><i class="glyphicon glyphicon-ok"></i> I AM DONE. FINISH THIS EXAM</b><b>&emsp;</b></a></p>

										                                     </div>
										                        </h6>				
		  	</div>				
		  </div>
		</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.min.js"></script>
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