<?php 

// Q: https://coderhub.sa/challenges/8d921f6e-1f9c-446e-9fc4-60f995c00dde/view?language=PHP

$numArray = [13, 3, 2, 10, 12, 250];
$k = 253;

$result = kSumSubset($numArray, $k);
var_dump($result);

function kSumSubset($numArray, $k) {
  // write your code here
  $i = 0;
  $sum = 0;
  $skip = 0;
  while ($i < count($numArray)) {
    $sum = $numArray[$i];
    if ($sum == $k) {
      return true;
    }
    $x = $i + 1;
    while ($x < count($numArray)) {
      $sum += $numArray[$x + $skip];
      if ($sum == $k) {
        return true;
      }
      $x++;
    }
    $skip++;
    if ($skip >= count($numArray)) {
      $i++;
      $skip = 0;
    }
  }
  return false;
}