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
$sql = "SELECT poll_id , question  FROM Poll WHERE check_poll='0'";
$RESULT = mysql_query($sql,$con);
if($RESULT){
for ($i=0; $i < mysql_num_rows($RESULT) ; $i++) 
        { 
          $row = mysql_fetch_array($RESULT, MYSQL_ASSOC);
echo  "<html><br></html>";
echo "Poll Id-->";
echo $row['poll_id']." <html><br></html>";
echo "Question:  ";
echo $row['question']." <html><br></html>";
echo "<html><form method = GET action='del.php' id='formd".$i."'><input type='hidden' value=".$row['poll_id']." name='poll_id'></form><button type='submit' form='formd".$i."' value='Submit'>Delete Poll</button><br><form method = GET action='proced.php' id='formp".$i."'><input type='hidden' value=".$row['poll_id']." name='poll_id'></form><button type='submit' form='formp".$i."'value='Submit'>Proceed Poll</button><br></html>";
}}
?>

