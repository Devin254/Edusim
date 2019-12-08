<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="test.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/icon" href="img/image12.jpg">
    <style>
    	body
      {
        background-image: url("images/bg.jpg");
        background-color: palegreen;
        background-repeat: repeat;
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
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
                   <h4><a href="" style="color: azure; font-size: 22px; padding: 0px;"><i class="glyphicon glyphicon-education"></i>        
                   E  D  U  S  I  M</a></h4>
                </div>
	           </div>
	        </div>
	     </div>
	</div>
    <div class="login-bg">
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
                      <center style="padding-top: 10px"> 
                        <h5 style="font-weight:bold;color:#228B22">WELCOME TO THE EDUSIM PANEL</h5>
                        </center>
                      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			                <input name="username" value="<?php if (!empty($user_username)) echo $user_username; ?>" class="form-control" type="text" placeholder="Username">
			                <input class="form-control" type="password" placeholder="Password" name="password">                 
                           <a href="sign_up_pupil.php"><i class="glyphicon glyphicon-plus"></i>  FIRST TIME PUPILS</a><br>
                           <a href="sign_up_examiner.php"><i class="glyphicon glyphicon-plus"></i>  FIRST TIME STAFF</a>
                         
			                <div class="action">
                          <i class="glyphicon glyphicon-log-in">  </i><br>
                          <input class="btn btn-success signup" type="submit" value="Log In" name="submit"/>
			                </div>                
                  </form>
                  <?php

                                      // Start the session
                                      session_start();

                                      // Clear the error message
                                      $error_msg = '';

                                      // If the user isn't logged in, try to log them in
                                      if (!isset($_SESSION['user_id'])) 
                                      {
                                          if (isset($_POST['submit'])) 
                                          {
                                            // Connect to the database
                                            $tt = mysqli_connect('localhost', 'root', '', 'test');

                                            // Grab the user-entered log-in data
                                            $user_username = mysqli_real_escape_string($tt, trim($_POST['username']));
                                            $user_password = mysqli_real_escape_string($tt, trim($_POST['password']));
                                     if (!empty($user_username) && !empty($user_password))  
                                          {
                                            // Look up the username and password in the database
                                            $query = "SELECT user_id, username, type, status FROM user WHERE username = '$user_username' AND password = SHA('$user_password')";
                                            $data = mysqli_query($tt, $query);
                                            $query_type = "SELECT type, status FROM user WHERE username = '$user_username'";
                                            $user_type_data = mysqli_query($tt, $query_type);
                                            $row = mysqli_fetch_array($user_type_data);
                                            $type_data = $row['type'];
                                            $status = $row['status'];
                                            if (mysqli_num_rows($data) == 1) 
                                            { 

                                              if ($status == 1) 
                                              {
                                              
                                              
                                              if ($type_data == 'PUPIL') 
                                              {
                                                    // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
                                                    $row = mysqli_fetch_array($data);
                                                    $_SESSION['user_id'] = $row['user_id'];
                                                    $_SESSION['username'] = $row['username'];
                                                    $_SESSION['type'] = $row['type'];
                                                    $user_status = $row['status'];
                                                    setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                                                    setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));
                                                    
                                                      
                                                    //note the sessions variables expires in 30 days
                                                    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/dashboard_pupil.php';
                                                    header('Location: ' . $home_url);
                                                    
                                                    
                                              }

                                              elseif ($type_data == 'EXAMINER') 
                                              {
                                                    // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
                                                    $row = mysqli_fetch_array($data);
                                                    $_SESSION['user_id'] = $row['user_id'];
                                                    $_SESSION['username'] = $row['username'];
                                                    $_SESSION['type'] = $row['type'];
                                                    setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                                                    setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
                                                    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/dashboard_examiner.php';
                                                    header('Location: ' . $home_url);
                                              }

                                              }

                                              else
                                              {
                                                 $error_msg = '<br>
                                                    <div class="alert alert-danger alert-dismissible">
                                                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                  <p style="font-size: 11px;"><strong><i class="glyphicon glyphicon-remove-circle"></i></strong></h6>
                                                                  <strong> YOUR ACCOUNT HAS NOT YET BEEN ACTIVATED</strong>
                                                                  </p>
                                                    </div>';
                                                    echo $error_msg;
                                              }

                                              

                                              
                                                    
                                              }

                                              else
                                              {
                                                $error_msg = '<br>
                                                    <div class="alert alert-danger alert-dismissible">
                                                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                  <p style="font-size: 11px;"><strong><i class="glyphicon glyphicon-remove-circle"></i></strong></h6>
                                                                  <strong> INCORRECT USERNAME AND PASSWORD</strong>
                                                                  </p>
                                                    </div>';
                                                    echo $error_msg;
                                              }


                                          }
                                          else 
                                          {
                                            
                                            // The username/password are incorrect so set an error message
                                            $error_msg = '<br>
                                                  <div class="alert alert-danger alert-dismissible">
                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                <p style="font-size: 11px;"><strong><i class="glyphicon glyphicon-remove-circle"></i></strong></h6>
                                                                <strong> PLEASE PROVIDE ALL THE INFORMATION ABOVE</strong>
                                                                </p>
                                                  </div>';
                                            echo $error_msg;

                                                          
                                          }
                                          }

                                          else 
                                          {
                                            // Default
                                            $error_msg = '';
                                                
                                          }
                                        }

                                    ?>
                  

                </div>
			        </div>

			        
			    </div>
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