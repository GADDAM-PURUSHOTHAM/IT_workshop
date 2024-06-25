<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>

<div>
    <h1>
        RAJIV GANDHI UNIVERSITY OF KNOWLEDGE AND TECHNOLOGIES
</h1>
<h1>Exam Hall Ticket</h1>
<?php
include("dbcon.php");

$query="select *from login";
$result=mysqli_query($con,$query);
$f=0;
foreach($result as $colunm)
{

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        if($colunm["id"] == $_POST["fname"] && $colunm["password"]==$_POST["pass"])
        {
            $idd=$colunm['id'];
            $namee=$colunm['name'];
            $branchh=$colunm['branch'];
            $yearr=$colunm['year'];
            echo "<h3> ID: $idd </h3>";
            echo "<h3> NAME: $namee </h3>";
            echo "<h3> BRANCH: $branchh </h3>";
            echo "<h3> YEAR: $yearr </h3>";
            $f=1;
            break;

        }
    }
        

}

if($f==0)
{
    echo "<h1> Wrong password check Once! </h1"; 
    header("Location:hlogin.php");
}







?>

<!--<h4>ID:</h4>
<h4>NAME:</h4>
<h4>Year:</h4>
<h4>BRANCH:</h4> -->
<br>

<table>
    <tr>
        <td>S.No</td>
        <td>Date & Time</td>
        <td>Subject</td>
        <td>Mode of Exam</td>

</tr>
        <tr>
            <td>
                1
</td>           <td>
                3/07/2024(2.00-5.00 PM)
</td>
<td>
                Web TECHNOLOGIES
</td>
<td>
                Regular
</td>

</tr>
<tr>
            <td>
                2
</td>           <td>
                4/07/2024(2.00-5.00 PM)
</td>
<td>
                Operation System
</td>
<td>
                Regular
</td>
<tr>
            <td>
                3
</td>           <td>
                5/07/2024(2.00-5.00 PM)
</td>
<td>
    DAA
</td>
<td>
                Regular
</td>
<tr>
            <td>
                4
</td>           <td>
                6/07/2024(2.00-5.00 PM)
</td>
<td>
                    Probabuliti & Statatics
</td>
<td>
                Regular
</td>

</tr>

</tr>

</tr>

</table>
<br><br><br>
<h3>Signiture</h3>
<h2>Controller of Examination</h2>


</div>

<button onclick="window.print()">PRINT THE HALL TICKET</button>
<a href="hlogout.php">Logout</a>
</body>
</html>