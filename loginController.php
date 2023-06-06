<?php
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



if(isset($_POST['login'])){

    $flag = false;

    $email = $_POST["email"];
    $password = $_POST["password"];


    $fileObject = fopen("Users.txt","r");
    if($fileObject){
        $users = file("Users.txt");

        foreach($users as $user){
      
        $userData =   explode(":",$user);
      
       if (strpos($user, $email) !== false) {
        
        $GLOBALS["flag"] = true ;
        break;

       }

        }
        if($flag){
            $_SESSION["email"]=$email;
            $_SESSION["password"]=$password;
            header("location:welcome.php");
        }else{
            header("location:login.php");
        }
    }



    // $keyemail = "ahmed@gmail.com";
    // $keypassword = 123456789;
    
    // $email = $_POST["email"];
   
    // $password = $_POST["password"]; 

    //  if(isset($email) && isset($password)){

    //      if($email === $keyemail && $password == $keypassword){
    //         // setcookie("email",$keyemail,time()+60);
    //         // setcookie("password",$keypassword,time()+60);
            
    //         $_SESSION["email"]=$email;
    //         $_SESSION["password"]=$password;

    //         header("location:welcome.php");
           
    //      }else{

    //          header("location:login.php");
    //     }
    //  }

}

?>