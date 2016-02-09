<?php

class Bike {
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price_val, $max_speed_val) {
		echo "You made a new bike!<br>";
		$this->price = $price_val;
		$this->max_speed = $max_speed_val;
		$this->miles = 0;
	}

	public function displayInfo() {
		echo "<u>INFO</u><br>";
		echo "-Price: $".$this->price.'<br>';
		echo "-Max Speed: ".$this->max_speed.' mph<br>';
		echo "-Miles: ".$this->miles.' mi<br>';
		return $this;
	}

	public function drive() {
		echo "*You drive 10 miles across the screen!*<br>";
		$this->miles += 10;
		return $this;
	}

	public function reverse() {
		echo "*You back up 5 miles across the screen!*<br>";
		$this->miles -= 5;
		if($this->miles < 0) {
			$this->miles = 0;
			echo "~OOPS! You backed up too far and hit the wall!~<br>";
		}
		return $this;
	}

}

$bike1 = new Bike(600, 60);
$bike1->drive()->drive()->drive()->reverse()->displayInfo();
echo "<br>";

$bike2 = new Bike(300, 30);
$bike2->drive()->drive()->reverse()->reverse()->displayInfo();
echo "<br>";

$bike3 = new Bike(100, 15);
$bike3->reverse()->reverse()->reverse()->displayInfo();
echo "<br>";


?>