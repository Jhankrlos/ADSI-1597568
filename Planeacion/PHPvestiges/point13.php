<?php

// a three-dimensional array is an array of arrays of arrays

$rgbArray = array();
$rgbArray['weight'] = 1; // int value
$rgbArray['height'] = 1; // int value
$rgbArray['rgb'] = 'red'; // string value

echo $rgbArray[1][1]['red'];