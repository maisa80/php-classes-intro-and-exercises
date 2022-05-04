<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="sv"> 
<head>
    <meta charset="utf-8">
    <title>Classes and objects</title>
</head>
<body>
    <h1>Classes and objects</h1>

    <?php
        error_reporting(-1);

        // Class declaration with properties and methods
		class Person { // name convention -> UpperCamelCase
			// Rights / Accessibility
			// public    - the property or method can be accessed from everywhere. This is default
			// protected - the property or method can be accessed within the class and by classes derived from that class
			// private   - the property or method can ONLY be accessed within the class
			
			// Property
			private $name = "Louise";
			public $age  = 25;

			// Method
			public function setName(string $name) {
				$this->name = $name;
			}

			public function getName() {
				return ucfirst($this->name);
			}

			public function setAge(int $age) {
				$this->age = $age;
			}

			public function getAge() {
				return $this->age;
			}

			public function getGreeting() {
				return "Hej, jag heter {$this->getName()} och är {$this->getAge()} år gammal.";
			}
		}

		$louise = new Person;
		echo $louise->getName();

		echo "<br>";
		
		$mattias = new Person;
		$mattias->setName('mattias');
		$mattias->setAge(23);
		echo $mattias->getName();
		echo "<br>";
		echo $mattias->getGreeting();


		// Class decalartion with __construct and typehinting
		class Animal {
			public $name;
			public $sound;
			public $favoriteFood;

			public function __construct(string $name, string $sound, string $favoriteFood) {
				$this->name 		= $name;
				$this->sound 		= $sound;
				$this->favoriteFood = $favoriteFood;
			}

			public function getFrase() {
				return "My name is {$this->name} and I like to eat {$this->favoriteFood}, {$this->sound}";
			}
		}


		$cat = new Animal('Tiberius', 'Mjauuuu', 'Popcorn');
		echo "<br>";
		echo "<br>";
		echo $cat->getFrase();

		$lion = new Animal('Simba', 'AAAARRRH', 'YOU');
		echo "<br>";
		echo "<br>";
		echo $lion->getFrase();
		


        /**
		 * 1)
		 *
		 * Create a new 'car' class with the properties 'brand' and 'originCountry' with default values "Volvo" and "Sweden"
		 * Add a method called 'getPresentation()'' that returns a presentation of the object,
		 * like this: "Volvo, a car brand originated in Sweden. <br>"
		 * Use `$this->brand` and $this->originCountry to construct the string.
		 *
		 * Create a new $volvo object from the car class and answer by calling $volvo->getPresentation()
		 */
		class Car{
			public $brand ;
			public $originCountry;
			public $slogan;
			
			public function __construct(string $brand, string $originCountry, string $slogan) {
				$this->brand 		= $brand;
				$this->originCountry = $originCountry;
				$this->slogan = $slogan;
			}

			public function getPresentation(){
				return "{$this->brand},  car brand originated in {$this->originCountry}";
			}

			// public function setBrand(string $brand){
			//  	$this->brand = $brand;
			// }
			// public function setOriginCountry(string $originCountry){
			// 	$this->originCountry = $originCountry; 
			// }
			// public function setSlogan(string $slogan){
			// 	$this->slogan = $slogan;
			// }
			public function getSlogan(){
				return "{$this->brand}, {$this->slogan}";
			}
			

		}
		// echo "<br>";
		// echo "<br>";
		// $volvo = new Car;
		// echo $volvo->getPresentation();


        /**
		 * 2)
		 *
		 * Add the methods setBrand() and setOriginCountry(), that makes it possible to change the values of the properties $brand and $originCountry
		 *
		 * Create a new $tesla object from the car class,
		 * change the values of the properties to $brand = 'Tesla' and $originCountry = 'USA', 
		 * and answer by calling $tesla->getPresentation()
		 */
		
		//  $tesla = new Car;
		//  $tesla->setBrand('Tesla');
		//  $tesla->setOriginCountry('USA');
		//  echo "<br>";
		//  echo "<br>";
		// echo $tesla->getPresentation();

        /**
		 * 3)
		 *
		 * Add a new property $slogan to the car class, dont assign it any new values. 
		 * Add a new method setSlogan() to the car class, that sets the value of $slogan.
		 * Use the setSlogan to set the value "Uncompromised Electric Vehicles", on the $tesla object you created earlier.
		 * Add a new method getSlogan() that returns a string like this: "Tesla, Uncompromised Electric Vehicles. <br>"
		 * Use `$this->brand` and $this->slogan to construct the string.
		 *
		 * Answer by calling $tesla->getSlogan()
		 */
		// $tesla-> setSlogan('Uncompromised Electric Vehicles');
		// echo "<br>";
		// echo "<br>";
		// echo $tesla->getSlogan();

        /**
		 * 4)
		 *
		 * Add a __construct to the car class, that makes it possible to preset values for all properties, when creating new objects
		 * Create a new $mercedes object with the car class and at thesame time set the values 
		 * $brand="MERCEDES-BENZ", $originCountry="Germany", $slogan="The Best or Nothing"
		 * 
		 * Answer by calling $mercedes->getPresentation() and $mercedes->getSlogan().
		 */
		$mercedes= new Car('MERCEDES-BENZ', 'Germany', 'The Best or Nothing');
		echo "<br>";
		echo "<br>";
		echo $mercedes->getPresentation();
		echo "<br>";
		echo "<br>";
		echo $mercedes->getSlogan();
    ?>
	
    <hr>
    <a href="https://www.php.net/manual/en/language.types.object.php">Objects</a>
</body>
</html>