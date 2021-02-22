<?php
/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/9/A
 * @version 1.0
 *
 * To simplify the fractions, we can use the gcd (or mcd in spanish) function, implemented by the euclidean algorithm
 * We can keep calculate the gcd until we reach 1
 *
 */

list($y, $w) = explode(' ', readline());

$max = (float)max($y, $w);

$numerator   = 6 - $max + 1;
$denominator = 6;

$gcd = gcd($numerator, $denominator);
while ($gcd != 1) {
    $denominator = $denominator / $gcd;
    $numerator   = $numerator / $gcd;
    $gcd         = gcd($numerator, $denominator);
}

echo "$numerator/$denominator";

function gcd($a, $b)
{
    return ($b == 0) ? $a : mcd($b, $a % $b);
}
