<?php
$couter =0;
while ($couter<5)
{
    $couter++;
    if($couter==3)
    {
        echo "Continues the loop<br>";
        continue;
    }
    echo "$couter<br>";
}
echo "The loop ends here";
?>