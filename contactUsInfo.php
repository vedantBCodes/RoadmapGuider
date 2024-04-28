<?php

$server="localhost";
$username="root";
$password="";
$db_name="My_new_db";



$name=$_POST['Name'];
$email=$_POST['Email'];
$message=$_POST['Message'];


//Database connection

$conn = mysqli_connect($server,$username,$password,$db_name);


<<<<<<< HEAD

=======
$sql = "INSERT INTO `contact_us`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$message')";

$result = mysqli_query($conn , $sql);

if($result==true)
{
    echo "Data submitted sucessfully";
}
else{
    echo "Query failed";
}
>>>>>>> 05075597b0175c01239eafa684d198bbbd25328d

if($conn==true)
{
    echo "Database Connected";
    
}
else
{
    echo "Not connected (error)";
<<<<<<< HEAD
}

$sql = "INSERT INTO `contact_us`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$message')";

$result = mysqli_query($conn , $sql);

if($result==true)
{
    echo "Data submitted sucessfully";
}
else{
    echo "Query failed";
}
=======
}


>>>>>>> 05075597b0175c01239eafa684d198bbbd25328d

?>