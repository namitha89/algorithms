<?php
class stack{

	public $data = array();

	public function put($ele){
		//var_dump($ele);
		array_push($this->data,$ele);

	}

	public function get(){

		return array_shift($this->data);

	}


}

$stack = new stack();
$stack->put(1);
$stack->put(2);
$stack->put(3);
$stack->put(4);
$stack->put(5);
print_r($stack->data);echo '<br/>pop operation.............';
$stack->get();
print_r($stack->data);
