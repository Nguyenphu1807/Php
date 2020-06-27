<?php
$files  = "/usr/local/apache2/htdocs/example.txt";


$to = "recipient@example.com";
$from = "yourname@example.com";
$subject = "Test e-mail";
$message = "Sample message";
$headers = "From: $from";


$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

$headers .= "\nMIME-Version: 1.0\n" ."Content-Type: multipart/mixed;
             \n " . " boundary=\"{$mime_boundary}\"";


$message .= "This is an example for mail attachment in MIME format.
             \n\n"  .  "--{$mime_boundary}\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
             $message . //  "\n\n";
$message .="--{$mime_boundary}\n";
$file = fopen($files,"rb");
$content = fread($file,filesize($files));
fclose($file);
$message .="Content-Type: {\"application/octet-stream\"};\n" . "
         name=\"$files\"\n" . $content . "\n\n";
$message .=  "--{$mime_boundary}\n";
//send
$send_mail = @mail($to, $subject, $message, $headers);
if ($send_mail)
{
    echo "<p>Mail sent to $to!!!!</p>";
}
else
{
    echo "<p>Mail could not be sent to $to!!!!</p>";
}
?>

