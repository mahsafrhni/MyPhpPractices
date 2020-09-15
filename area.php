<?php
function square($a)
{
    return ($a * $a);
}

function circle($r)
{
    return ($r * $r) * pi();
}

function rectangle($a, $b)
{
    return ($a * $b);
}

function triangle($a, $b)
{
    return ($a * $b) / 2;
}

function getAreaFunctions($shapes)
{
    $a[] = $shapes[0];
    $a[] = $shapes[1];
    $a[] = $shapes[2];
    $a[] = $shapes[3];
    return $a;
}
$functions = getAreaFunctions(['square', 'circle', 'rectangle', 'triangle']);

echo $functions[3](4, 5);