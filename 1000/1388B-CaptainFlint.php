<?php

/**
 * @author Pablo Digiani
 * @see
 *
 * There key to understand the problem is to take a look at the output pattern:
 * 1: 8
 * 2: 98
 * 3: 998
 * 4: 9998
 * 5: 99988
 * 6: 999988
 * 7: 9999988
 * 8: 99999988
 * 9: 999999888
 *
 * Notice that after 4 numbers, the amount of 8s is increased
 *
 */


$answers = [];
$tests = readline();

for($t = 1; $t <= $tests; $t++) {

	$n = readline();

	# determine number of nines & eights
	$eights = ($n % 4)
		? floor($n / 4) + 1
		: $n / 4;
	$nines = $n - $eights;

	$answers[]= str_pad('',$nines, '9') . str_pad('', $eights, '8');
}

# print output
foreach ($answers as $a) echo $a.PHP_EOL;