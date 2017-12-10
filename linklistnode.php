<?php 
class Node{

	public $data;
	public $nextnode;

	public function __construct($val) {

		$this->data = $val;
		$this->nextnode = NULL;

	}

}
$head = NULL;
$input = array(2,3,4,5,6);

$node1 = new Node(2);
$node2 = new Node(3);
$node3 = new Node(4);
$node4 = new Node(5);
$node5 = new Node(6);
$head = $node1;

$node1->nextnode = $node2;
$node2->nextnode = $node3;
$node3->nextnode = $node4;
$node4->nextnode = $node5;
$node5->nextnode = NULL;


function displayData($head){

	while($head->nextnode != NULL){
 		
 		echo $head->data.' ';
 		$head = $head->nextnode;
	}
	echo $head->data;
}

displayData($node1);











?>