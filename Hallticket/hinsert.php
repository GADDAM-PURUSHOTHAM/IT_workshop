
<?php
session_start();
include("dbcon.php"); // Assuming db.php contains your database
//connection details
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password']; // Correct variable name
$branch = $_POST['branch'];
$year = $_POST['year']; // Correct variable name

if (!empty($password)) { 
//Corrected empty check and variable name
// Assuming db.php contains database connection code
$query = "INSERT INTO login VALUES ('$id', '$password', '$name', '$branch', '$year')";
mysqli_query($con, $query);
// echo "<script type='text/javascript'> alert('Successfully

header("Location:hlogin.php");
} else {
echo "<script type='text/javascript'> alert('Please Enter valid
information')</script>";
}
}
?>

