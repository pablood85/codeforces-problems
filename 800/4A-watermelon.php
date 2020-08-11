<?php

/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/4/A
 * @version 1.0
 *
 * The easiest problem to begin with.
 * The key concept is the understanding of the modulus operator and how is used to determine if a number is even.
 * Let n be an integer:
 *  - if n % 2 == 0, then n is even
 *  - if n % 2 != 0, then n is odd
 *
 * Having said that, the only edge case to consider is when w == 2
 *
 */

$w = readline();
echo ($w == 2) ? 'NO' : ($w % 2) ? 'NO' : 'YES';

