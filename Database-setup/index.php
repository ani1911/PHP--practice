<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
    

    <form action="includes/formhandler.inc.php" method="post">
        <h3>SignUp</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button>SignUp</button>


    </form>
    <form action="includes/userupdate.inc.php" method="post">
        <h3>change account</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button>update</button>


    </form>
    <form action="includes/userdelete.inc.php" method="post">
        <h3>delete account</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>delete</button>


    </form>



</body>
</html>