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
    <link href="css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="inc/TimeCircles.css" />
	<!-- Datatable CSS -->
    <link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>


     <!-- jTime Library -->

     <script src="inc/TimeCircles.js"></script>
     <!-- jQuery Library -->
     <script src="jquery-3.3.1.min.js"></script>
        
     <!-- Datatable JS -->
     <script src="DataTables/datatables.min.js"></script>

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!--Styles for the collapsibles-->

	                 <style>
					.collapsible {
					  background-color: green;
					  color: white;
					  cursor: pointer;
					  padding: 18px;
					  width: 100%;
					  border: none;
					  text-align: left;
					  outline: none;
					  font-size: 13px;
					}

					.active, .collapsible:hover {
					  background-color: gray;
					}

					.content {
					  padding: 0 18px;
					  max-height: 0;
					  overflow: hidden;
					  transition: max-height 0.2s ease-out;
					  background-color: white;
					}

					.collapsible:after {
					  content: '\02795'; /* Unicode character for "plus" sign (+) */
					  font-size: 13px;
					  color: white;
					  float: right;
					  margin-left: 5px;
					}

					.active:after {
					  content: "\2796"; /* Unicode character for "minus" sign (-) */
					}
					</style>

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
	                          <li><a href="">Profile</a></li>
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