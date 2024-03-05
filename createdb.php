<?php 
$hostname="localhost";
$username="root";
$password="";

$con=mysqli_connect($hostname, $username, $password);

if($con)
{
    $sql = "CREATE DATABASE signupforms";

    $queryexecute=mysqli_query($con, $sql);

    if($queryexecute)
    {
        echo "Database created successfully";
    }
    else
    {
        die(mysqli_error($con));
    }
}
else
{
    die(mysqli_error($con));
}
?>