<?php
	function passbyrefrence(&$val) {
        echo "inside ".$val.'</br>';
		$val = 11112;

	}

	$z = 9;
	passbyrefrence($z);
	echo $z;
?>