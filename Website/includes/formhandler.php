<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

     $name = htmlspecialchars( $_POST["name"] );
 
     $email = htmlspecialchars($_POST["email"]);

     if(empty($name)){
  header("Location: ../index.php");
        exit();

     }


      echo "These are the data submitted : ";
      echo "<br>";
      echo $name;
      echo "<br>";
      echo $email;
      

      header("Location: ../index.php");
    

}

else{
    header("Location : ../index.php");
}