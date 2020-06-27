<?php
session_start();
$myname = $_SESSION['myname'];
?>
<html>
<head><title> Homepage </title></head>
<body>
Welcome <?php echo $myname ?> to Mypage.com <br>
</body>
</html>
