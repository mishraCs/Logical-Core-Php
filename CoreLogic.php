<?php
class Fruit {
    public $name;
    public $color;
  
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
  }
  
       // Array of Fruit objects
          $fruits = array(
            new Fruit("Apple", "Red"),
            new Fruit("Orange", "Orange"),
            new Fruit("Banana", "Yellow")
          );

    // $fruits = array("Apple"=>"Red","Orange"=>"Orange","Banana"=>"Yellow");
  
  // A foreach loop that prints the name and color of each fruit
  foreach ($fruits as $key => $value) {
    echo "Fruit $key: Name = " . $value->name . ", Color = " . $value->color . "\n";
  }
  
?>