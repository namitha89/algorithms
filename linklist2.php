<?php 
class Linklist2{

	public $data;
	public $nextnode;

	public function __construct($val) {
		$this->data = $val;
		$this->nextnode = NULL;

	}
}

$input = array(6,7,8,9,10);
function createhead($input) {
	$prev = NULL;
	for($i=0; $i<count($input);$i++) {
		$node = new Linklist2($input[$i]);
		if($i==0) {
			$head = $node;
		}else {
			$prev->nextnode = $node;
		}
		$prev = $node;
	}

	return $head;

}

function displaydata($he) {

	while($he->nextnode != NULL) {
		echo $he->data;
		$he = $he->nextnode;
	}

	echo $he->data;

}
$he = createhead($input);
displaydata($he);
?>