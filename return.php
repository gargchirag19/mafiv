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


$acc_no=$_POST['acc_no'];
 
 $sqll = "UPDATE Library SET  issue_date=NULL,issue_id=NULL,expected_return_date=NULL,avail=TRUE WHERE acc_number=$acc_no ";


if (mysql_query($sqll)) {
      header("Location: library.html");
} else {
    echo mysql_error();
}
?>

