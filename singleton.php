<?php 
class singleton{

	public static $instance = NULL; //for static variable no need to instantiate the class 
	private function __construct() {

	} 

	public  static function Instance() {
		if(singleton :: $instance == NULL){
			return singleton :: $instance;
		} else {
			$instance = new singleton();
			return singleton :: $instance;
		}
	}


}


// all objects cretaed for single have same address only one instance
$obj = singleton :: Instance();
$obj2 = singleton :: Instance();
// $obj3 = new singleton(); error displayed because contructor is private

print_r(spl_object_hash($obj));echo '<br/>';
print_r(spl_object_hash($obj2));
if($obj === $obj2){
	echo 'compared';
}


?>