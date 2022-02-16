<?php

// class goodbye{
// 	const LEAVING_MESSAGE="Thankyou for everything";
// }
// echo goodbye::LEAVING_MESSAGE;

		// abstract class;
//abstract class Car{
	// public $name;
	// public function __constructor($name){
	// 	$this->name=$name;
	// }
	// abstract public function intro():string{
	// 	return "{$this->name}";
	// }
// 	abstract protected function cars($name);
// }
// class Model extends Car{
// 	//public $name;
// 	public function cars($name){
// 		return "{$name}";
// 	}
// }
// $car= new Model;
// echo $car->cars("BMW");

		//traits
// trait message{
// 	public function masg(){
// 		echo "opp is fun!";
// 	}
// }
// class Welcome{
// 	use message;
// }
// $obj= new Welcome();
// $obj->masg();


//static method;
class greeting{
	public static function method(){
		echo "hello world";
	}
	public function __construct(){
		self::method();
	}
}
new greeting()
//greeting::method();
?>