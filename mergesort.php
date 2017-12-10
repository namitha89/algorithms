<?php

function mergesort($inputarray) {
	$count = count($inputarray);
	$mid = $count/2;
	if($count == 1)
		return $inputarray;
	if($count > 0) {

		$leftinputarray = array_slice($inputarray, 0,$mid); 
		$rightinputarray = array_slice($inputarray, $mid,$count-1); 

		$leftoutarray = mergesort($leftinputarray); 
		$rightoutarray = mergesort($rightinputarray);

		return merge($leftinputarray, $rightinputarray);


	} 
} 

 function merge($left, $right) {
 	$output = array();

 	$count_l = count($left);
 	$count_r = count($right);

 	for ($i=0; $i < $count_l + $count_r; $i++) {

	 	if(empty($left)) {
	 		$output = array_merge($output, $right);
	 	}

	 	if(empty($right)) {
	 		$output = array_merge($output, $left);

	 	}

	 	if (!empty($left) and !empty($right)) {
	 		if ($left[0] < $right[0]) {
	 			$ele = array_shift($left);
	 		} else {
	 			$ele = array_shift($right);
	 		}
	 		array_push($output, $ele);	 			
	 	}

 	}
 	return $output;

 }

$inputarray = array(1,8,2,9);
$out = mergesort($inputarray);
/*$inp = array(1,3,6,8);
$inp2 = array(2,5,7,9);
$myout = merge($inp, $inp2);*/
print_r($out);


?>