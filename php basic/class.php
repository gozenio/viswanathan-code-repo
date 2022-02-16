<?php
	//basic class object
	class Fruit{
		public $name;
		public $color;
		public function __construct($name,$color){
			$this->name=$name;
			$this->color=$color;
			
		}
		// function __destructor(){
		// 	echo $this->name;
		// }
		public function intro(){
			echo "The fruit is {$this->name} and the color is {$this->color}.";
		}
	}
	//$apple=new Fruit('Apple');

	//public,protected,private
	/**
	 * 
	 */
	// class Fruit	{
	// 	public $name;
	// 	public $color;
	// 	public $weight;
	// 	function set_get($name)
	// 	{
	// 		$this->name=$name;
	// 	}
	// 	protected function set_color($name)
	// 	{
	// 		$this->name=$name;
	// 	}
	// 	private function set_weigth($name)
	// 	{
	// 		$this->name=$name;
	// 	}
	// }



	Class Berry extends Fruit{
		public $weight;
		public function __construct($name,$color,$weight){
			$this->name=$name;
			$this->color=$color;
			$this->weight=$weight;

		}
		function __destruct(){
			echo "{$this->name}:{$this->color}:{$this->weight}";
		}
		// public function message(){
		// // 	echo 'this is Fruit or berry';
		// echo "{$this->name}:{$this->color}:{$this->weight}";
		// }
	}
	// $strawberry=new Berry("strawberry","red");
	// $strawberry->message();
	// $strawberry->intro();

	$apple =new Fruit("Apple","color","300");
	//$apple->message();
	// $apple->set_get('Apple');
	// $apple->set_color('red');
	// $apple->set_weigth(300);

  ?>
