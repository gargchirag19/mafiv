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


$title=$_POST['title'];
$description=$_POST['description'];
$time=$_POST['time'];
$date=$_POST['date'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$sqll = "INSERT INTO Notification (title,description,time,date,sem,branch) VALUES ('$title','$description','$time','$date','$sem','$branch')";


if (mysql_query($sqll)) {
     header("Location: admin.html");
} else {
    echo mysql_error();
}
?>

