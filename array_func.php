<?php 
function arrayoperation($n) {
	$c = array();
	$input = array(1,2,3,4,6,7,8);
	$count = sizeof($input);
	$n = $n % $count;
	if($n){
	 $last = array_slice($input, $count-$n);
	 $first = array_slice($input, 0, $count-$n);
	 $output = array_merge($last, $first);
	 print_r($output);
	}
	
}

arrayoperation(10);

$x = 3%5;
$y=3/5;

echo $x.'<<>>'.$y;

$x = array("a" => "red", "b" => "green");  
$y = array("b" => "green", "a" => "red");  

var_dump($x === $y);

?>