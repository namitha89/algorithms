<?php
function hourglass($r,$c) {
	return array(array($r,$c-1));

}
$result = array();
$result = hourglass(2,2);
print_r($result);