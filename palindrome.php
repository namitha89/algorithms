<?php
function palindrome($num){

	$input = str_split($num);
	$count = count($input);
	$temp = '';
	for($i=($count-1); $i>=0; $i--) {
		$temp .= $input[$i];
	}
	if($num == $temp){
		echo 'Given number is palindrome';
	}
	else{
		echo 'Not a palindrome';
	}
	
}

//palindrome('aba');
$time = microtime();
palindrome(131);
echo microtime() - $time;

?>