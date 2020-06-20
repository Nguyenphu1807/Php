<html>
<body>
<?php
$sever = "";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($sever, $username, $password);
if($connect_mysql)
echo " Connection established.";
$mysql_db = mysqli_select_db($connect_mysql,"publications");

if($mysql_db)
    echo "<br><br>Connect to the database <br><br>";

echo "<TABLE BORDER BGCOLOR='white'>";
echo "<tr><th>USER_ID<th><th>USER_NAME<th><th>USER_EMAIL_ID</th>";
echo "<DBQUERY q> select * FROM USER_CONTACT";
echo "<DBROW><TR><TD><? q.USER_ID</TD><TD><? q.USER_NAME</TD><TD><? q.USER_EMAIL_ID</TD></TR>";
echo "</DBQUERY>";
echo "<TR>";
echo "<TABLE>";
?>
</body>
</html>