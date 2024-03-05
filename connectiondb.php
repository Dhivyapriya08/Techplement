<?php 
$hostname="localhost";
$username="root";
$password="";
$database="signupforms";

$con=mysqli_connect($hostname, $username, $password, $database);

// --METHOD 1
 // if($con)
// {
//     echo "database connected successfully";
// }
// else 
// {
//     die(mysqli_error($con));
// }
//  or
// no need to show database connected successfully or echo statement always in server. 
// For this we can use 2nd method.Remove echo statement same as here in sign.php code also.

// --METHOD 2:

 if(!$con)
 {
    die(mysqli_error($con));
 }
?>