<?php
class Greetings{
    private $word = "Hello";
}
$closure = function ($whom)
{
    echo "$this->word $whom\n";
};
$obj = new Greetings();
$closure->call($obj, 'jhon');
$closure->call($obj, 'Kevin');
?>