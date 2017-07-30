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


$day=$_POST['day'];
$room=$_POST['room'];
$course_id=$_POST['course_id'];
$course_name=$_POST['course_name'];
$facu=$_POST['facu'];
$time=$_POST['time'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];

 
 $sqll = "INSERT INTO Lecture_TT (day,Room_no,course_id,course_name,Faculty,Time,Branch,semester) VALUES ('$day','$room','$course_id','$course_name','$facu','$time','$branch','$sem')";


if (mysql_query($sqll)) {
   header("Location: admin.html");
} else {
    echo mysql_error();
}
?>

