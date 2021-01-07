<h1>Tests sur les branches et les tags</h1>

<?php
require_once 'inc/multiply.inc.php';

function add(int $a, int $b): ?int
{
    return $a + $b;
}

$a = 6;
$b = 2;

echo "<p>" . $a . " + " . $b . " = " . add($a, $b) . "</p>";

$c = 8;
$d = 2;

echo "<p>" . $c . " + " . $d . " = " . add($c, $d) . "</p>";

// Multiplication
$e = 2;
$f = 12;

echo "<p>" . $c . " * " . $d . " = " . multiply($e, $f) . "</p>";