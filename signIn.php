<?php


if($_POST)
{
    
$server="localhost";
$username="root";
$password="";
$db_name="My_new_db";

//Database connection

$conn = mysqli_connect($server,$username,$password,$db_name);

    $email=$_POST['email'];
    $password=$_POST['password'];
    $sMail=mysqli_real_escape_string($conn,$email);
    $sPass=mysqli_real_escape_string($conn,$password);
    // For Security 
    $query="SELECT * From sign_up_table where Email='$sMail' and Password='$sPass'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['anything']='something';
        // header('location:index.html');
        echo 'LogIn Successfully';
        
    }
    else{
        // header('location:dataAnalyst.html');
        echo("LogIn Failed");
    }
}
?>

