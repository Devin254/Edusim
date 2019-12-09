<?php 
include('server.php');
 
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: signin.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
//user test 
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('title.php'); ?>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/jquery.dataTables.css"/>
 
	<script type="text/javascript" src="datatables/jQuery-3.3.1/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="datatables/DataTables-1.10.18/js/jquery.dataTables.js"></script>

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<script type="text/JavaScript">
<!--
function AutoRefresh( t ) {
setTimeout("location.reload(true);", t);
}
// -->
</script>
<body onload="JavaScript:AutoRefresh(2000000);">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="amp"><p><?php include('logo.php'); ?>  <?php include('header.php'); ?> </p></div>
	<div>
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	</div>
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<?php include('top.php'); ?>
	<div class="divider"></div>
	<?php include('side.php'); ?>
</div><!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Home <br> <p style="float: left;"><?php echo (strftime("%m/%d/%Y %H:%M:%S")); ?></p></li>
		</ol>
	</div>
	<!--put in body-->

	<?php include('myhome.php'); ?>

	<!--end of body-->	
 	
	
</div>	<!--/.main-->
	
	 
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
$(document).ready( function () {
$('#table1').DataTable();
} );
</script>
</body>
<?php include('footer.php'); ?>
</html>