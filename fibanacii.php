<?php


$count = 0;

function fibanacii($n) {
	global $count;
	$count++;
	if ($n == 0 )
        return [0];
    if ($n == 1)
        return [1];
   
    return fibanacii($n-1) + fibanacii($n-2);
   }

$memory = array();








function fibanaciimem($n) {
	global $memory;
	if (array_key_exists($n, $memory)){
		return $memory[$n];
	}


	global $count;
	$count++;

	if ($n == 0 )
        return 0;
    if ($n == 1)
        return 1;
    
    $data = fibanaciimem($n-1) + fibanaciimem($n-2);
    $memory[$n] = $data;
    return $data;
   }



// function callfib($num){
// 	for($i=0; $i<=$num; $i++) {
// 		echo fibanacii($i).'<br/>';
// 	}
// }

echo fibanacii(5);
echo "---------";
print_r( $memory);
echo $count;
// callfib(10);