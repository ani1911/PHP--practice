<?php
   require_once 'includes/config_session.inc.php';
   require_once 'includes/signup_view.inc.php';
   require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

      <h3>
        <?php 
               output_username();
          ?>
      </h3>
    <div class="center">
        <div class="forms-row">
            <div class="panel">
                <h3>Login</h3>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="username" placeholder="Username" >
                    <input type="password" name="pwd" placeholder="Password" >
                    <button type="submit">Login</button>
                </form>
            </div>

            <div class="panel">
                <h3>Signup</h3>
                <form action="includes/signup.inc.php" method="post">
                    <?php 
                         signup_inputs();
                    ?>
                    
                    <button type="submit">Signup</button>
                </form>
            </div>
        </div>
    </div>

    <?php 

       check_login_error();
    
    ?>


    <?php

       check_signup_errors();
    
    
    ?>


<h3>Logout</h3>
                <form action="includes/logout.inc.php" method="post">
                   
                    <button type="submit">Logout</button>
                </form>

</body>
</html>