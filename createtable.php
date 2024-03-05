<?php 
$hostname="localhost";
$username="root";
$password="";
$database="signupforms";

$con=mysqli_connect($hostname, $username, $password, $database);

if($con)
{
    $sql = "CREATE TABLE registration (
    id INT(100) NOT NULL AUTO_INCREMENT, 
    username VARCHAR(100) UNIQUE, 
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
    )";

    $queryexecute=mysqli_query($con, $sql);

    if($queryexecute)
    {
        echo "Table created successfully";
    }
    else
    {
        die(mysqli_error($con));
    }
    //echo "success";
}
else
{
    die(mysqli_error($con));
}
?>