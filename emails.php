<?php

$server="localhost";
$username="root";
$password="";
$db_name="My_new_db";


$email=$_POST['email'];


//Database connection

$conn = mysqli_connect($server,$username,$password,$db_name);


$sql = "INSERT INTO `userEmails`(`Email`) VALUES ('$email')";

$result = mysqli_query($conn , $sql);

if($result==true)
{
    echo "Data submitted sucessfully";
}
else{
    echo "Query failed";
}

if($conn==true)
{
    echo "Database Connected";
    
}
else
{
    echo "Not connected (error)";
}



?>