<?php 
//prime number
function prime($n) {

	for($i=1; $i<=$n; $i++ ) {

		if(($i % 2) == 0)
		{
			//echo 'number is not a prime number';
		}else{
			echo $i.'<br/>';
		}

	}
}

prime(50);
?>