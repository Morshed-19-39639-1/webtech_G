<?php

session_start();
session_destroy();
if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
$email =  $_COOKIE['email'];
$pass = $_COOKIE['password'];
setcookie('email' , $email, time()-1);
setcookie('pass' , $pass, time()-1);
}
echo"You successfully logout. <br> click here to  <a href= 'login.php'> login again </a> " ;
echo" <br> click here   <a href= 'user.php'> HOME </a> " ;



?>