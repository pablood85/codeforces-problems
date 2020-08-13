<?php

/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/1399/A
 * @version 1.0
 *
 * Another easy one
 * The first step is to sort the array, then we can simple iterate over it and break the loop when
 * the difference between the current elm and the next is greater than one: a[i+1] - a[i] > 1
 *
 */


$tests   = readline();
$answers = [];
for ( $t = 1; $t <= $tests; $t ++ ) {

	$len = readline();
	$array  = explode( ' ', readline() );
	sort($array);
	$answer = 'YES';
	for ($i = 0; $i < $len-1; $i++){
		if($array[$i+1] - $array[$i] > 1){
			$answer = 'NO';
			break;
		}
	}
	$answers[]=$answer;
}
foreach ( $answers as $a ) {
	echo $a . PHP_EOL;
}