<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>


<div class="container" style="padding-top: 50px;">

  <h1>CARS</h1>











<?php


class Car {

  public $color = "Silver";
  public $make = "VW";
  public $modell = "Polo";
  public $year = 1999;
  public $horsepower = 80;
  private $fuelLevel = 77;


  public function changeColor ($newColor) {
    $this->$color = $newColor;
  }


  // This function allows us to accses the private variable of color
  public function currentFuelLevel () {
    return $this->fuelLevel;
  }


  // A function (Method) that fills up the fuel level back to 100
  public function fillUpFuelTank() {
    $this->fuelLevel = 100;
  }

}

$myShittyCar = new Car();

// Different ways to find out what color the car is
echo "<b>Current Fuel Level</b><br>";
echo $myShittyCar->currentFuelLevel();

echo "<br><br>";
echo "<b>The Color of our car</b><br>";

// Public attributes can be accsesed like this
echo $myShittyCar->color;

// Using this method (setter method) we can change the attribute
$myShittyCar->fillUpFuelTank();

echo "<br><br><b> Fuel-Level after filling up the tank </b><br>";
echo $myShittyCar->currentFuelLevel();









// INHERITANCE
// --------------------------------------
// --------------------------------------


class SportsCar extends Car {

  // You can override properties of the parent Class
  public $horsepower = 250;


  // You can create methods that are unique to the new Class (SubClass)
  public function makeSomeNOISE() {
    echo "WWRRRRRRRRRRR!!";
  }

}

// Creating a new SportsCar
$myFancyFerrari = new SportsCar();

// You can use the SportsCar Methods
echo "<hr><h3>All the new Sportscars say: </h3>";
$myFancyFerrari->makeSomeNOISE();



// You can also use the Parents mehtods (remember a SportsCar is still a Car ;) )
echo "<br><br><h4>We can still fill up the fuel tank of course: </h4>";

echo "<b>Current Level of Fuel :</b> ";
echo $myFancyFerrari->currentFuelLevel();


echo "<br>";

echo "<b>New Level of Fuel :</b> ";
$myFancyFerrari->fillUpFuelTank();
echo $myFancyFerrari->currentFuelLevel();




?>
</div>
