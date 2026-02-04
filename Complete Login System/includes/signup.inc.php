<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $username =   $_POST["username"];
      $email =   $_POST["email"];
      $pwd =   $_POST["pwd"];


      try{
       require_once 'dbh.inc.php';
       require_once 'signup_model.inc.php';
       require_once 'signup_contr.inc.php';

        

       // erro handling

       $errors = [];

       if(is_input_empty($username , $pwd , $email)){
            $errors["emptyInput"] = "Fill in all fields!";

       }

       if(is_email_invalid( $email)){
        $errors["invalid_email"] = "Invalid email !";


       }

       if(is_username_dublicate(  $pdo ,$username)) {
        $errors["username_taken"] = "username already present!";

       }

       if( is_email_present(  $pdo , $username)){
        $errors["emaild_taken"] = "email already present!";

       }
         
         require_once 'config_session.inc.php';

       if($errors){

            $_SESSION['errors_signup'] = $errors;

            $signupData = ["username" => $username ,
                  "email"  => $email
            ];

            $_SESSION["signup_data"] = $signupData;

            header("Location: ../index.php");
            die();




       }


       create_user($pdo , $username ,  $pwd ,  $email);

       header("Location: ../index.php?signup=success");
       

       $pdo = null;
       $stmt= null;
        
       die();


            

      }catch(PDOException $e){

     die("Query failed : " .$e ->getMessage());
}

}else{

      header("Location: ../index.php");
      die();
}