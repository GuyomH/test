<h1>Tests sur les branches et les tags</h1>

<?php
function add(int $a, int $b): ?int
{
    return $a + $b;
}

$a = 6;
$b = 2;

echo "<p>" . $a . " + " . $b . " = " . add($a, $b) . "</p>";

$c = "abc";
$d = 2;

echo "<p>" . $c . " + " . $d . " = " . add($c, $d) . "</p>";