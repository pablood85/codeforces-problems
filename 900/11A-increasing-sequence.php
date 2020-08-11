<?php

/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/11/A
 * @version 1.0
 */

# read input 
list($len, $inc) = sscanf(readline(), "%d %d");
$seq_string = readline();

# convert sequence into an array
$sequence = explode(' ', $seq_string);

# iterate the sequence 
$tries = 0; 
for ($i = 0; $i < $len -1; $i++){
	
    $cur = $sequence[$i];
	$nxt = $sequence[$i+1];

	if($cur >= $nxt){
		$new_tries = floor(($cur - $nxt) / $inc) + 1;
		$tries += $new_tries;
		$sequence[$i+1]= $nxt + $new_tries * $inc;
	}
}

echo $tries;