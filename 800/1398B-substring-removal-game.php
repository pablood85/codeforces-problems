<?php

/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/1399/A
 * @version 1.0
 */

$inputs[0] = 5;
$inputs[1] ='01111001';
$inputs[2] ='0000';
$inputs[3] ='111111';
$inputs[4] ='101010101';
$inputs[5] ='011011110111';

$debug = false;

$tests = $debug ? $inputs[0] : readline();
$answers = [];
for ($t = 1; $t <= $tests; $t++){

	$str = $debug ? $inputs[$t] : readline();
	$len = strlen($str);

	$counter = 0;

	$consecutives = [];
	for ($i = 0; $i < $len; $i++){
		if($str[$i] == '1'){
			$counter++;
			if($i == $len-1 && $counter > 0) $consecutives[]= $counter; # last number
		}else {
			if($counter > 0) $consecutives[]= $counter;
			$counter = 0;
		}
	}

	rsort($consecutives);

	$alice = 0;
	$bob = 0;
	foreach ($consecutives as $round => $score){

		if($round == 0){
			$alice += $score;
		}else{
			if($round % 2) $bob += $score; else $alice+= $score;
		}
	}

	$answers[]= $alice;

}
foreach ($answers as $a) echo $a . PHP_EOL;