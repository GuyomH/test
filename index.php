<h1>Tests sur les branches et les tags</h1>

<?php
function add(int $a, int $b): ?int
{
    return $a + $b;
}

$a = "abc";
$b = 2;

echo $a . " + " . $b . " = " . add($a, $b);