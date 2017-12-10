<?php
Class Linklistnodedynamiccreation {

	public $data;
	public $nextnode;

	public function __construct($val) {

		$this->data = $val;
		$this->nextnode = NULL;
	}

}

$input = array(2,3,4,5,6);



function createlinklist(&$input) {

	$count = count($input);
	$prev = NULL;
	for($i=0; $i<$count; $i++) {
		$node = new Linklistnodedynamiccreation($input[$i]);
		if($i == 0) { 
			$head = $node;
		} else {
			$prev->nextnode = $node;
		}

		$prev = $node;
	}

	return $head;
	
}

function displayData($head){

	while($head->nextnode != NULL){
 		
 		echo $head->data.' ';
 		$head = $head->nextnode;
	}
	echo $head->data;
}

$h = createlinklist($input);
//print_r($h);
displayData($h);
?>