<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno) die("Fatal Error");

$query = "Select * From customers";
$result = $conn ->query($query);
if (!$result) die("Fatal Error");

$row = $result->num_rows;

for ($j = 0; $j < $row; ++$j)
{
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo 'Name: '        . $row['name']       .'<br>';
    echo 'Isbn  : '      . $row['isbn']         .'<br><br>';
}

$result->close();
$conn->close();
?>
