<?php
$sales = 2750;
if($sales >2000)
{
    $comm = $sales * .1;
    echo "Sales : $$sales <br> Commission : $$comm";

}
else {
    $comm = $sales * 0.05;
    echo "Sales : $$sales <br> Commission : $$comm";
}
?>