<html>
<body>
<?php
error_reporting(0);
$multi = "/usr/local/apache2/htdocs/example.txt";
$to_mail = file('Code3.php');
$from = "yourname@example.com";

for($i;$i<count($to_mail);$i++)
{
    $to_mail['i'] = trim($to_mail[$i]);
    $to = imlode(",",$to_mail);
    $subject = "An example";
    $body = "This is an example fo the mail() function.";
    mail($to, $subject, $body, $from);
    echo "Mail was is sent to all the addresses!!!";
}
?>
</body>
</html>
