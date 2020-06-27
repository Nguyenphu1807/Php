<?php
$val1 = $_GET['logname'];
$val2 = $_GET['pass'];

setcookie("logname",$val1);
if($val1="")
{
    echo "Please enter the name!";
    echo "<HTML>";
    echo "<HEAD>";
    echo "<TITLE> Validate</TITLE>";
    echo "</HEAD>";
    echo "<BODY>";
    echo "<A HREF='Ex1.html'> Back </A>";
    echo "</BODY>";
    echo "</HTML>";
}
else if ($val2=="")
{
    echo "Please enter the password!";
    echo "<HTML>";
    echo "<HEAD>";
    echo "<TITLE> Validate</TITLE>";
    echo "</HEAD>";
    echo "<BODY>";
    echo "<A HREF='Ex1.html'> Back </A>";
    echo "</BODY>";
    echo "</HTML>";
}
else
{
    header("location: homepage.php");
}
?>