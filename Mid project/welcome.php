<?php

session_start();
echo "Welcome". '  ' . $_SESSION['email']; 

echo" <br> <br>To enroll JOB POINT successfully. <br> ClickMe to  <a href= 'job.php'> ENTER </a> " ;

echo "<a href=' logout.php' > <br> logout </a>";



?>
