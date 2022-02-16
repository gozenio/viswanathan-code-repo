<?php
	class Fruit{
		public $name;
		function _constructor($name){
			$this->name=$name;
		}
		function _destructor(){
			echo $this->name;
		}
	}
	$apple=new Fruit('Apple');
  ?>