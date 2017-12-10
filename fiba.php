<?php
//fibanacii 0 1 1 2 3
function fibanacii($n){

	$first = 0;
	$second = 1;

	echo $first.'<br/>';
	echo $second.'<br/>';

	for($i=1; $i<=$n; $i++) {
	echo $third = $first+$second.'<br/>';
		$first = $second;
		$second = $third;

	}

}

fibanacii(5);
?>