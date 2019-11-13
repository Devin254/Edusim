<!DOCTYPE html>
<html>
  <head>

    <?php
	    echo '<title> Edusim - ' . $page_title . '</title>';
	    require_once('session_start.php');
	?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="test.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/icon" href="">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/jquery.dataTables.css"/>
	<script type="text/javascript" src="datatables/jQuery-3.3.1/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="datatables/DataTables-1.10.18/js/jquery.dataTables.js"></script>

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
                   <h4><a href="" style="color: azure; font-size: 22px; padding: 0px;"><i class="glyphicon glyphicon-education"></i>        
                   E  D  U  S  I  M</a></h4>
                </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php

								  // Generate the navigation menu
								  if (isset($_SESSION['username'])) 
								  {
								    echo  $_SESSION['username'] ;
								  }
								  else 
								  {
								    echo 'Log In';
								  }
								 
								  
								?>  <i class="glyphicon glyphicon-user"></i></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="manage_lecturer_profile.php">Profile</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>