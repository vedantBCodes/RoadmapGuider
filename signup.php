<?php

$server="localhost";
$username="root";
$password="";
$db_name="My_new_db";

$name=$_POST['name'];
$email=$_POST['email'];
$SignUpPassword=$_POST['password'];


// Database connection

$conn = mysqli_connect($server,$username,$password,$db_name);

$sql = "INSERT INTO `sign_up_table`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$SignUpPassword')";

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