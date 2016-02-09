<?php

class Car {
	public $price;
	public $speed;
	public $fuel;
	public $milage;
	public $tax;

	public function set_price($value) {
		$this->price = $value;
		if ($this->price > 10000) {
			$this->tax = 15;
		} else {
			$this->tax = 12;
		}
	}
	public function set_speed($value) {
		$this->speed = $value;
	}
	public function set_fuel($value) {
		$this->fuel = $value;
	}
	public function set_milage($value) {
		$this->milage = $value;
	}

	public function Display_all() {
		echo "<u>INFO</u><br>";
		echo "-Price: $".$this->price.'<br>';
		echo "-Speed: ".$this->speed.'mph <br>';
		echo "-Fuel: ".$this->fuel.'% full <br>';
		echo "-Milage: ".$this->milage.'mpg <br>';
		echo "-Tax: ".$this->tax.'% <br>';
	}
}

$car1 = new Car();
$car1->set_price(2000);
$car1->set_speed(35);
$car1->set_fuel(100);
$car1->set_milage(15);
$car1->Display_all();
echo "<br>";

$car2 = new Car();
$car2->set_price(2000);
$car2->set_speed(5);
$car2->set_fuel(0);
$car2->set_milage(105);
$car2->Display_all();
echo "<br>";

$car3 = new Car();
$car3->set_price(2000);
$car3->set_speed(35);
$car3->set_fuel(50);
$car3->set_milage(20);
$car3->Display_all();
echo "<br>";

$car4 = new Car();
$car4->set_price(2000000);
$car4->set_speed(200);
$car4->set_fuel(75);
$car4->set_milage(30);
$car4->Display_all();
echo "<br>";

$car5 = new Car();
$car5->set_price(2000);
$car5->set_speed(40);
$car5->set_fuel(100);
$car5->set_milage(45);
$car5->Display_all();
echo "<br>";




?>