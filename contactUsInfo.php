<?

$server="localhost";
$username="root";
$password="";
$db_name="My_new_db";



$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


//Database connection

$conn = mysqli_connect($server,$username,$password,$db_name);

if(!$conn)
{
    echo " not connected";
}
else
{
    echo " connected";
}
?>