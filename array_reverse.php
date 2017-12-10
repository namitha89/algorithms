<?php
$input = array('0002',4,0,5,6,'gh');

//convert array value to interger
function integerval(&$val){

	if(!is_numeric($val)) {
		$val = 99;
	}
	$val = (int)$val;
	
} 

array_walk($input, "integerval");
$count = count($input);
$rev = array();
for($i=1; $i<=$count; $i++) {

	$rev[] = $input[$count-$i];

}

print_r($rev);