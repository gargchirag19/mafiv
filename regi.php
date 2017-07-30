<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "1248762";
$password = "12345678";

$con =  mysql_connect($servername, $username, $password,1248762);

if (!$con) 
{
  echo 'not connected to server';
}

mysql_select_db('1248762',$con) or die("not connected to database");

$id=$_POST['id'];
$password=$_POST['password'];
$name=$_POST['name'];
$semester=$_POST['semester'];
$branch=$_POST['branch'];

 
 $sqll = "INSERT INTO Student  VALUES ('$id','$password','$name','$semester','$branch')";


if (mysql_query($sqll)) {
     header("Location: admin.html");
} else {
    echo mysql_error();
}
?>

