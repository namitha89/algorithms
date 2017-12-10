<?php
//string encode

function encoder($inputstring){
	
	$stringlen = strlen($inputstring);
	$count = 1;
	$prev = $inputstring[0];
	$output = array();
	for($i = 1; $i < $stringlen; $i++) {
		//echo 'inside for--'.$inputstring[$i].'<<<>>>'.$i.'<br/>';

		if($inputstring[$i] == $prev) {
			$count++;

		} else {
			array_push($output, $count.$prev);
			echo 'else statement-'.$count.$prev.'<br/>';
			$count = 1;
			
		}

		$prev = $inputstring[$i];
		//echo 'previous'.$inputstring[$i].'<br/>';

		echo 'prev '.$prev.'<br/>';
	}
	array_push($output, $count.$prev);
	echo 'outside for statement-'.$count.$prev.'<br/>';
	return $out = implode('',$output);
}

function decoder($instring) {
	$finalout = '';
	for($j = 0; $j < strlen($instring); $j++) {
		//echo 'inside for loop'.$j.'<br/>';
		if(is_numeric($instring[$j])){
			$outstring = $instring[$j].$instring[$j+1];
			$finalout .= smallProblem($outstring);
		}
	}
	echo $finalout;
}

function smallProblem($inputstring) {
	$num = $inputstring[0];
	$var = $inputstring[1];
	$variable = array();
	for($i = 0;$i < $num; $i++ ) {
		//echo '<br/>inside if small for'.$var.'<br/>';
		array_push($variable, $var);

	}

	//var_dump($variable);
	return $output = implode('',$variable);
}

//encoder
$inputstring = "aaabb";
//echo encoder($inputstring);

//decoder
$instring = "3a2b";
echo decoder($instring);

//small problem
//$instring = "3a";
//echo '<br/>'.smallProblem($instring);
?>