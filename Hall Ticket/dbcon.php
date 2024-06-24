<?php
$servername='localhost';
$username="root";
$password="";
$dbname="hallticket";

// create connection
$con= mysqli_connect($servername,$username,$password,$dbname);
// check connection
if(!$con){

echo "Failure";

die("Connection failed:" .  mysqli_connect_error());
}
else
{
echo "";
}
?>


