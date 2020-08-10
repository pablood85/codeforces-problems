<?php

$tests = readline();
$answers = [];
for ($t = 1; $t <= $tests; $t++) {

	# read input and convert sequences into arrays

	$gifts = readline();
	$seqA = explode(' ', readline());
	$seqB = explode(' ', readline());

	# calculate min values in sequences
	$minA = min($seqA);
	$minB = min($seqB);

	$moves = 0;
	for($i = 0; $i < $gifts; $i++){
		if($minA < $seqA[$i] && $minB < $seqB[$i]){
			$diffA = $seqA[$i] - $minA;
			$diffB = $seqB[$i] - $minB;
			$max_double_decrements = min([$diffA, $diffB]);
			$moves+= $max_double_decrements;
			if($diffA > $diffB){
				$moves += $diffA - $max_double_decrements;
			}else{
				$moves += $diffB - $max_double_decrements;
			}
		}elseif($minA < $seqA[$i]){
			$moves+= $seqA[$i] - $minA;
		}elseif($minB < $seqB[$i]){
			$moves+= $seqB[$i] - $minB;
		}
	}
	$answers[]= $moves;

}
foreach($answers as $a) echo $a.PHP_EOL;