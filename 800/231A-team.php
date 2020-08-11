<?php

/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/231/A
 * @version 1.0
 *
 * This one is super simple.
 * Just count the number of ones (1) in each line and increment the counter if there are at least 2
 * In php the array_sum function can be used to do the count
 *
 */

$problems = readline();

$implementations = 0;
for ($n = 1; $n <= $problems; $n++){
	if(array_sum(explode(' ', readline())) >= 2) $implementations++;
}
echo $implementations;