<?php
$a1 = str_split("john");
$a2 = str_split("smit");

if(count($a1) >= count($a2)){
		list($a1,$a2) = array($a2,$a1);

	for($x=0; $x < count($a1); $x++)
        $a2[$x] .= $a1[$x];
        //$a2[$x];
}

	echo implode('',$a2);

?>