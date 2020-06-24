<?php
$Salary=8000;
if($Salary<6000)
{
    echo "Basic : $Salary<br>";
    echo "Salary below 6000 is not entitled for HRA.";
    exit();
}
else
{
    echo "Basic : $Salary<br>";
    $hra=$Salary*0.8;
    echo "HRA : $hra";
}
?>