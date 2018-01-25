<?php 
class Doublylinkedlist{

	public $data,$nextnode,$prevnode;

	public function __construct($val){

		$this->data = $val;
		$this->nextnode = NULL;
		$this->prevnode = NULL;
	}

}

/*$node1 = new Doublylinkedlist(1);
$node2 = new Doublylinkedlist(2);
$node3 = new Doublylinkedlist(3);
$node4 = new Doublylinkedlist(4);
$node5 = new Doublylinkedlist(5);
$node6 = new Doublylinkedlist(6);

$head = $node1;

$node1->nextnode = $node2;
$node2->nextnode = $node3;
$node3->nextnode = $node4;
$node4->nextnode = $node5;
$node5->nextnode = $node6;
$node6->nextnode = NULL;*/
$array = array(2,3,4,5,6);
function createnode($array){

	$prevnode = NULL;
	for($i=0;$i<count($array);$i++){
		$node = new Doublylinkedlist($array[$i]);
		//echo 'print i '.$i.'<br/>';
		if($i == 0){
			$head = $node;
		}
		else { 

			if ($prevnode != NULL) {
				$node->prevnode = $prevnode;
				$prevnode->nextnode = $node;
			}

			
			
		}
		$prevnode = $node;
	}

	return $head;
}

function displaydata($node){

	while($node->nextnode != NULL) {
		# code...
		echo $node->data.' ';
		$node = $node->nextnode;
	}
	echo $node->data.' ';
}

$node = createnode($array);
$display = displaydata($node);

