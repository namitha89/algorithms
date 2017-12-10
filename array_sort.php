<?php
$a = array(
	0 => 'z12',
	1 => 'z10',
	2 => 'z2',
	3 => 'z1');
$b = array(4,9,10,2,3);
//sort($b);
rsort($b);
print_r($b);		
krsort($a);

print_r($a);