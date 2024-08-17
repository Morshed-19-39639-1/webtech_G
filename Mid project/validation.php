<?php

$myemail = "morshed@gmail.com";
$mypass  =  "123"; 

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rem = $_POST['remember'];
    if ($email == $myemail  and $pass == $mypass ) {
        $rem = $_POST['remember'];
        if( isset($_POST['remember'])){
            setcookie('email' , $email, time()+60*60*30);
            
        }
        session_start();
        $_SESSION['email'] =$email;
        header("location: welcome.php");
        
    } else {
        echo "Given email or password is not correct. <br> click here to  <a href= 'login.php'> try again </a> " ;
    }
    
} else {
    header(" location: login.php ");
}




?>
