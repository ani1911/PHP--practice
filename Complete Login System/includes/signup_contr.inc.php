<?php

declare(strict_types=1);


function is_input_empty(string $username ,string $pwd , string $email) {

      if(empty($username ) || empty($pwd ) || empty($email ) ){

             return true;
      }else{
           return false;
      }

}

function is_email_invalid(string $email) : bool {

      if(!filter_var($email , FILTER_VALIDATE_EMAIL) ){

             return true;
      }else{
           return false;
      }

}

function is_username_dublicate( object $pdo ,string $username) : bool {

      if( get_username( $pdo,  $username)){

             return true;
      }else{
           return false;
      }

}
function is_email_present( object $pdo ,string $username) : bool {

      if( get_email( $pdo,  $username)){

             return true;
      }else{
           return false;
      }

}
function create_user( object $pdo ,string $username , string $pwd , string $email) {

         set_user( $pdo , $username ,  $pwd , $email);
}