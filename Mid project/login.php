<style type="text/css">
th{
    text-align: right;
}h3{
    text-align: center;
}
</style>

<table cellpadding="5" cellspacing="10" align="center" >
<h3> Login  </h3>
<form method="post" action="validation.php" >
    <tr>
        <th>Email</th>
        <td><input type="text" name="email" id="email" placeholder="use valid email" ></td>
    </tr>
    <tr>
        <th>Password</th>
        <td> <input type="password" name="password" id="pass" placeholder="use valid password" > </td>
    </tr>
    <tr>
        <td colspan="2" align="center" > <input type="checkbox" name="remember" value="1" > Remember Me </td>
    </tr>
    <tr>
        <td colspan="2" align="right"  > <input type="submit" name="login" value="login"> </td>
    </tr>

</form>
</table>
<?php
if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){

$email =  $_COOKIE['email'];
$pass = $_COOKIE['pass'];
echo " <script>
alart('$email')
document.getElementById('email'). value = '$email';
document.getElementById('pass'). value = '$pass';
</script>";
}

?>