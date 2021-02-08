<?php

/**
 * @author Pablo Digiani <p.digiani@gmail.com>
 * @link https://codeforces.com/problemset/problem/1478/A
 * @version 1.0
 *
 * It took me some minutes to understand what was being requested, but then the solution comes instantly.
 * Note that the use of the explode function makes reading "n" unnecessary
 * Also make sure you access each sequence in the array using reference "&", otherwise it will fail in the second test
 *
 */

$t = readline();
$responses = [];
for($i = 1; $i<= $t; $i++){

    $n = readline();
    $numbers = explode(' ', readline());

    $sequences = [];
    foreach ($numbers as $number){
        $added = false;
        foreach ($sequences as &$sequence){
            if(!in_array($number, $sequence)){
                $sequence[]= $number;
                $added = true;
                break;
            }
        }
        if(!$added) $sequences[] = [$number];
    }
    $responses[]= count($sequences);
}

foreach ($responses as $r) echo $r . PHP_EOL;

