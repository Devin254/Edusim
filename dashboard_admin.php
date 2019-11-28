<?php
  // Insert the page header
  $page_title = 'Edusim - Dashboard';
  require_once('session_start.php');
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
	  						<h6><i class="glyphicon glyphicon-dashboard"></i>  <b>DASHBOARD</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>

		  	<div class="content-box-large">
				<div class="panel-body">
				<h6>
				
Element Changed 
<div id="clockdiv"> 

	
	D <span class="days" id="day"></span>:

	
	H <span class="hours" id="hour"></span>:

	
	M <span class="minutes" id="minute"></span>:

	 
	S <span class="seconds" id="second"></span> 


<p id="demo"></p> 
<script>
         var dt = 
         
</script>


<script> 

var deadline = new Date();
         deadline.setMinutes( deadline.getMinutes() + 180 );

var x = setInterval(function() { 

var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("day").innerHTML =days ; 
document.getElementById("hour").innerHTML =hours; 
document.getElementById("minute").innerHTML = minutes; 
document.getElementById("second").innerHTML =seconds; 
if (t < 0) { 
		clearInterval(x); 
		document.getElementById("demo").innerHTML = "TIME UP"; 
		document.getElementById("day").innerHTML ='0'; 
		document.getElementById("hour").innerHTML ='0'; 
		document.getElementById("minute").innerHTML ='0' ; 
		document.getElementById("second").innerHTML = '0'; } 
}, 1000); 
</script> 
</h6>	

		  	</div>				
		  </div>
		</div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">     
    $(document).ready(function () 
    {
    $('#dtexample').DataTable();
    } 
    );
    </script>
  </body>
</html>