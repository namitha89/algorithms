<?php 
class Node {

	public $data;
	public $nextnode;

	public function __construct($val) {
		$this->data = $val;
		$this->nextnode = NULL;
	}

	public function nodelength() {

		$count = 0;
		$node = $this;

		while($node != NULL) {

			$count++;
			$node = $node->nextnode;
		}

		return $count;

	}
}

$input = array(2,3,4,5,6);

function createlinklist(&$input) {

	$count = count($input);
	$prev = NULL;
	for($i=0; $i<$count; $i++) {
		$node = new Node($input[$i]);
		if($i == 0) { 
			$head = $node;
		} else {
			$prev->nextnode = $node;
		}

		$prev = $node;
	}

	return $head;
	
}

function displayData($head) {

	while($head->nextnode != NULL) {
 		
 		echo $head->data.' ';
 		$head = $head->nextnode;
	}
	echo $head->data;
}























$h = createlinklist($input);
//print_r($h);
echo 'Length = '.$h->nodelength().'<br/>';

$key = 5;
$dkey = 4;
$update = 12;

$updatelinklist = updateLinkedList($h, $key, $update);
//displayData($updatelinklist);
$deleteLinkedList = deleteLinkedList($h, $dkey);
displayData($deleteLinkedList);

function updateLinkedList($head, $key, $update) {
	
	$h = $head;
	while($h->nextnode !=NULL) { 
		//print_r($h->data);
		if($h->data == $key){

			$h->data = $update;
		}
		$h = $h->nextnode;
	}

	return $head;


}

function deleteLinkedList($head, $dkey) {

	$h = $head;
	$prev = NULL;
	while($h->nextnode !=NULL) { 
		//print_r($h->data);
		if($h->data == $dkey){
			$prev->nextnode = $h->nextnode;
		}
		$prev = $h;
		$h = $h->nextnode;

	}

	return $head;
}

































?>