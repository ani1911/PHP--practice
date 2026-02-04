<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

         $username =   $_POST["username"];
      $pwd =   $_POST["pwd"];


      try{

        require_once 'dbh.inc.php';
       require_once 'login_model.inc.php';
       require_once 'login_contr.inc.php';


        $errors = [];

        if(is_input_empty($username, $pwd)){
          $errors["emptyInput"] = "Fill in all fields!";

        }


       $result = get_user($pdo, $username);

       if(is_username_present($result)){
         $errors["login_incorrect"] = "Incorrect login info!";
       } 
       if(!is_username_present($result) && is_pwd_wrong($pwd , $result["pwd"])){
         $errors["login_incorrect"] = "Incorrect login info!";
       } 




    
 
          require_once 'config_session.inc.php';

          if($errors){

            $_SESSION['errors_login'] = $errors;

            header("Location: ../index.php");
            die();

          }

          // Regenerate the session id for the logged-in user
          session_regenerate_id(true);

          $_SESSION["user_id"] = $result["id"];
          $_SESSION["username"] = htmlspecialchars($result["username"]);

          $_SESSION["last_regeneration"] = time();

          header("Location: ../index.php?login=success");
       

       $pdo = null;
       $stmt= null;
        
       die();

      }catch(PDOException $e){

     die("Query failed : " .$e ->getMessage());
}

}

else{
        header("Location: ../index.php");
      die();
}