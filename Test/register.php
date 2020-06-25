<?php
//require_once 'register.html';
if (isset($_SERVER['PHP_AUTH_USER']) &&
    isset($_SERVER['PHP_AUTH_PW']))
{
    echo "Welcome User: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) .
        "Password : " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
}
else
{
    header('WWW-Authenticate: Basic realm="Restricted"');
    header('HTTP/1.0 401 Unauthorized');
    die("please enter your username and password");
}

?>
