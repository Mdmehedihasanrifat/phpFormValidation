<?php

function ageValidate($max ,$min,$age){


    if($age<$max && $age>$min){

    return true;
    }





}



function emailvalidate($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


        return true;
    }
}

  function checkEmail($email){

  $email_array=explode('@',$email);
 $email_part=end($email_array);

 if($email_part=="northsouth.edu" ||$email_part=="coderTrust.edu"){

     return true;
 }
  }


  function old($name){

    if(isset($_POST[$name])){

        echo $_POST[$name];
    }
  }


?>