<?php

class human1 {
	public static $eyes = 2;
	private static $religion = "XXX";
	
	public static function getReg(){
	return self::$religion;
	}
	
	public static function getClass(){
		return __CLASS__;
	}
}

var_dump(human1::getClass());

echo '<br>';

class Person{
	/*public $name;
	public $age;
	public $job;*/
	private $salary;
	
	public function __construct($name,$age,$job,$salary = 1000){
		$this->name = $name;
		$this->age = $age;
		$this->job = $job;
		$this->salary = $salary;
	}
	
	public function getSalary(){
		return $this->salary;
	}
	
	public function __destruct(){
		//echo $this->name,'<br>';
	}
}

$ivan = new Person('Ivan', 30, 'Сантехник', 200);
$petya = new Person('Petya', 35, 'Программист');

echo $ivan->name, "-", $ivan->getSalary(),'<br>';
echo $petya->name, "-", $petya->getSalary(),'<br>';
