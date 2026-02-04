<?php


class Signup extends Dbh {

      private $username;
      private $pwd;

       public function __construct($username , $pwd){
            $this->username = $username;
            $this->pwd = $pwd;
       }

    

     private function insertUser(){
         $query = "INSERT  into users (username,pwd) values (:username , :pwd);" ;

         $stmt = parent::connect()->prepare($query);

         $stmt->bindParam(":username" , $this->username);
         $stmt->bindParam(":pwd" , $this->pwd);
       

         $stmt->execute();
     }
    



     public function signupUser(){

       if(!$this->isEmptySubmit()){
           $this->insertUser();
           header("Location: ../index.php");
           die();
       }else{
           header("Location: ../index.php?error=emptyfields");
           die();
       }

          
     }

     private function isEmptySubmit(){
          if(empty($this->username) || empty($this->pwd)){
               return true;
          }
          return false;
     }



       
}