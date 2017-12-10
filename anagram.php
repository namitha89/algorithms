<?php
 function anagram($string, $input) {
 	$stringParts = str_split($string);
 	$temp = str_split($input);
 	sort($stringParts);
 	sort($temp);
 	if(count($stringParts) == count($temp)) {
 		echo 'string length is same';
 		if($stringParts == $temp) {
 			echo 'Its an anagram';
 		}
 		else{
 			echo 'it not an anagram';
 		}
 	}
 	else{
 		echo 'not an anagram';
 	}
  

 }  
 anagram('catt','attc');
?>