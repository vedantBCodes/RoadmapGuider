<?php


$server="localhost";
$username="root";
$password="";
$db_name="My_new_db";


$email=$_POST['email'];
$password=$_POST['password1'];
// $skill=$_POST['skill'];
$fName=$_POST['firstName'];
$lName=$_POST['lastName'];
$pNumber=$_POST['phoneNumber'];


//Database connection

$conn = mysqli_connect($server,$username,$password,$db_name);



$sql = "INSERT INTO `join_now_table2`(`Email`, `Password`, `FirstName`, `LastName`, `PhoneNumber`) 
    VALUES ('$email','$password','$fName','$lName','$pNumber')";

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