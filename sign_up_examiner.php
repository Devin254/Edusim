<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="test.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/icon" href="">
    <style>
      body
      {
        background-image: url("");
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
                        <h5 style="font-weight:bold;color:#228B22"> <i class="glyphicon glyphicon-user"></i> EXAMINER SIGN UP</h5>
                        </center>
                      <form method="post" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                      <input name="username" value="<?php if (!empty($user_username)) echo $username; ?>" class="form-control" type="text" id="username" placeholder="Username">
                      <input class="form-control" type="password" placeholder="Password" id="password1" name="password1">
                      <input class="form-control" type="password" placeholder="Repeat Password" id="password2" name="password2">
                      <input type="hidden" class="form-control" id="type" name="type" value="EXAMINER"/>
                      <input class="form-control" type="text" placeholder="First Name" name="first_name">
                      <input class="form-control" type="text" placeholder="Other Names" name="other_names">
                      <input class="form-control" type="text" placeholder="Staff ID" name="identification"> 
                      <input class="form-control" type="text" placeholder="Phone Number" name="contact">
                      <input class="form-control" type="text" placeholder="Email" name="email">
                                        
                           <a href="login_general.php"><i class="glyphicon glyphicon-thumbs-up"></i>  ALREADY REGISTERED?</a><br>
                           
                         
                      <div class="action">
                          <input class="btn btn-success signup" type="submit" value="SUBMIT" name="submit"/>
                      </div>                
                  </form>
                  <?php

            // Connect to the database
            $tt = mysqli_connect('localhost', 'root', '', 'test');

            if (isset($_POST['submit'])) 
            {
              // Grab the profile data from the POST
              $username = mysqli_real_escape_string($tt, trim($_POST['username']));
              $password1 = mysqli_real_escape_string($tt, trim($_POST['password1']));
              $password2 = mysqli_real_escape_string($tt, trim($_POST['password2']));
              $type = mysqli_real_escape_string($tt, trim($_POST['type']));
              $first_name = mysqli_real_escape_string($tt, trim($_POST['first_name']));
              $other_names = mysqli_real_escape_string($tt, trim($_POST['other_names']));
              $identification = mysqli_real_escape_string($tt, trim($_POST['identification']));
              $contact = mysqli_real_escape_string($tt, trim($_POST['contact']));
              $email = mysqli_real_escape_string($tt, trim($_POST['email']));
              

              if (!empty($username) && !empty($password1) && !empty($password2)) 
              {
                // Make sure someone isn't already registered using this username
                $query = "SELECT * FROM user WHERE username = '$username'";
                $data = mysqli_query($tt, $query);
                if (mysqli_num_rows($data) == 0) 
                {   
                  if ($password1 == $password2) 
                  {
                                // The username is unique, so insert the data into the database
                              $query = "INSERT INTO user (username, password, type, status) VALUES ('$username', SHA('$password1'), 'EXAMINER','1')";
                              mysqli_query($tt, $query);
                              $query_type = "SELECT user_id FROM user WHERE username = '$username'";
                              $user_id_data = mysqli_query($tt, $query_type);
                              $row = mysqli_fetch_array($user_id_data);
                              $id_data = $row['user_id'];
                              $query_other = "INSERT INTO `people` (`person_id`, `user_id`, `first_name`, `other_names`, `identification`, `grade_level`, `contact`, `email`) VALUES (NULL, '$id_data', '$first_name', '$other_names', '$identification', 'N/A', '$contact', '$email')";
                              mysqli_query($tt, $query_other);
                                       
                              echo '<br>
                                    <div class="alert alert-success alert-dismissible">
                                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                  <p style="font-size: 11px;"><strong><i class="glyphicon glyphicon-ok-sign"></i></strong></h6>
                                                  <strong> ACCOUNT REGISTERED. YOU CAN NOW LOGIN</strong>
                                                  </p>
                                    </div>';               
                              mysqli_close($tt);
                  }
                  else  
                  {
                     echo '<br>
                            <div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <p style="font-size: 11px;"><strong><i class="glyphicon glyphicon-remove-circle"></i></strong></h6>
                                          <strong> PASSWORDS ENTERED DO NOT MATCH</strong>
                                          </p>
                            </div>';
                  }
                  
                  

                }
                else 
                {
                  // An account already exists for this username, so display an error message
                  echo '<br>
                  <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p style="font-size: 11px;"><strong><i class="glyphicon glyphicon-remove-circle"></i></strong></h6>
                                <strong> THE USERNAME IS TAKEN</strong>
                                </p>
                  </div>';
                  $username = "";
                }
              }
              else {
                echo '<br>
                  <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p style="font-size: 11px;"><strong><i class="glyphicon glyphicon-remove-circle"></i></strong></h6>
                                <strong>PLEASE PROVIDE ALL THE DETAILS ABOVE</strong>
                                </p>
                  </div>';
              }
              // Clear the number data to clear the form
                                          $username = '';
                                          $password1 = '';
                                          $password2 = '';
                                          $type = '';
                                                    exit();
            }

            mysqli_close($tt);
          ?>

                  
                  
                </div>

              </div>

              
          </div>
      </div>
    </div>
  </div>

</div>
</div>
<a href="dashboard_admin.php"></a>
     



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>