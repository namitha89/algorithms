<?php
	function palindrome($input){
		$length = strlen($input);
		for($i = 0; $i<$length/2 ; $i++) {
			if($input[$i] != $input[$length - ($i+1)]) {
				echo 'Its not a palindrome</br>';
				return;
			}
		}
		echo 'is palindromm</br>';
	}

	palindrome('ababc');
?>