<?php 
class A{

	public $name;
	public function getName($name) {
		return $name;
	}
	public function Hello(){
		return 'hello a';
	}

}

class B extends A{

	public $name;
	public function getName($name) {
		return $name;
	}
	public function Hello($k=9){
		return 'hello B'.$k;
	}

}

class C extends B{

	public $name;
	public function getName($name) {
		return $name;
	}
	public function Hello($d=1){
		return 'hello c'.$d;
	}

}



$obja =  new A();
echo $obja->getname('namitha').'<<<>>>class a<<>><br/>';
$objb =  new B();
echo $objb->getname('naren').'<<<>>>class b<<<>>>';
$objc =  new C();
echo $objc->Hello(2).'<<<>>>class c<<<>>>';
echo $objc->Hello().'<<<>>>class c<<<>>>';

?>