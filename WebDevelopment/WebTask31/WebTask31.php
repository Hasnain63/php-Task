<?php
//The parent class
class Car
{
  private $model;

  //Public setter method
  public function setModel($model)
  {
    $this->model = $model;
  }

  public function hello()
  {

    echo "beep! I am a Mercedes Benz ";
  }
}
class SportsCar extends Car
{
  public function hello()
  {
  }
}
class SVU extends Car
{
  public function hello()
  {
    echo "beep! I am a Mercedes Benz SVU";
  }
}
$sportsCar1 = new Car();
$sportsCar1 = new SVU();
// Set the value of the class’ property.
// For this aim, we use a method that we created in the parent
$sportsCar1->hello();