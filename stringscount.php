<?php
$finalout = array(); 
$fp = fopen('myfile.txt', 'r');

$temp = array();
while (!feof($fp)) {
    $char = fgetc($fp);	
    // $check = $char == ' ' ? 'true' : 'false';
    // echo ">>>>".$char.$check.'</br>';
    if ($char != ' ' and $char != '\n' and $char != ',	') {
    	array_push($temp, $char);
    } else {
    	$word = implode('', $temp);
    	$word = strtolower($word);
    	$temp = array();
    	// echo $word;
		if(array_key_exists($word, $finalout)) {
			$finalout[$word] = $finalout[$word] + 1; 

		}else {
			$finalout[$word] = 1; 

		}


    }

}
var_dump($finalout);


?>