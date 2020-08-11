<?php

/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/71/A
 * @version 1.0
 *
 * An easy one. The solution is pretty straightforward
 */


$n = readline();
$words = [];
for ($i = 1; $i <= $n; $i++){
	$w = readline();
	$len = strlen($w);
	$words[]= ($len > 10)
		? sprintf('%s%s%s', $w[0], $len - 2, $w[$len-1])
		: $w;
}
foreach($words as $w) echo $w . PHP_EOL;