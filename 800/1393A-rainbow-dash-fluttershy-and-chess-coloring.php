<?php

/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/1393/A
 * @version 1.0
 *
 * After doing some coloring we start to notice a pattern:
 *
 * Eg: when (n == 2 or n == 3): takes 2 turns
 *
 * [1 2] [2 1 2]
 * [2 1] [1 2 1]
 *       [2 1 2]
 *
 * Eg: when (n == 4 or n == 5): takes 3 turns
 *
 * [2 1 2 1] [1 2 1 2 1]
 * [1 2 3 2] [2 3 2 3 2]
 * [2 3 2 1] [1 2 3 2 1]
 * [1 2 1 2] [2 2 3 2 2]
 *           [1 2 1 2 1]
 *
 * So the formula is:
 * When n is even: $n - ($n/2 - 1)
 * When n is odd: decrement $n and use the formula above
 *
 */

$tests = readline();
$answers = [];
for ($t = 1; $t <= $tests; $t++) {

	$n = readline();
	if($n % 2) $n--;
	$answers[]= $n - ($n/2 - 1);
}

foreach($answers as $a) echo $a.PHP_EOL;
