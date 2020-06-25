<?php
require_once 'login.php';
$connection = new mysqli($hn,$un,$pw,$db);
if ($connection->connect_errno) die("kết nối faled");
$query = "CREATE TABLE information(
            id VARCHAR(16) primary key ,
            fullname VARCHAR(128),
            email VARCHAR (50),
            name VARCHAR(25),
            password VARCHAR (16),      
)";
$result = $connection->query($query);
if (!$result ) die("lỗi kết nối");
//------------------------------------------------------------------------------
$id = '123';
$fullname = 'abcd';
$email = 'abc@gmail.com';
$name = 'abc';
$password='5';
$hash = password_hash($password,PASSWORD_DEFAULT);
add_user($connection,$id,$fullname,$email,$name,$hash);

$id = '132';
$fullname = 'abcd';
$email = 'acb@gmail.com';
$name = 'abc';
$password='6';
$hash = password_hash($password,PASSWORD_DEFAULT);
add_user($connection,$id,$fullname,$email,$name,$hash);
//---------------------------------------------------------
function add_user($connection,$hn,$un,$pw,$db)
{
    $stmt = $connection->prepare('INSERT INTO information VALUE (?,?,?,?,?)');
    $stmt->bind_param('sssss',$hn,$un,$pw,$db,$em);
    $stmt->execute();
    $stmt->close();
}
?>
