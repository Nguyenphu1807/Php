<?php
include 'Code7.php';
use aptech\{Boston,  Newyork};
use function aptech\{foo1,  foo2};
$d = new Boston();
$d->say();
$n = new Newyork();
$n->say();
foo1();
foo2();
?>