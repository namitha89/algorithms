<?php 

$input = fopen('mytxt.txt','r');

$temp = array(); $finaloutput = array();
while(!feof($input)){

	$char = fgetc($input);
	if($char !=' ' and $char !='\n'){
		array_push($temp, $char);
	}else {
		$singleword = implode('',$temp);
		//echo $singleword; 
		$singleword = strtolower($singleword);
		$temp = array();
		if(array_key_exists($singleword, $finaloutput)){
			$finaloutput[$singleword] = $finaloutput[$singleword] + 1;

		}else {
			$finaloutput[$singleword] = 1;
		}



	}

}
var_dump($finaloutput);