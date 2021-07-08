<?php
class Car
{
  protected static function getCarName()
  {
    return 'Beep! I am a sports Car <i>Farrie</i>';
  }
}
class superCar extends Car
{
  public $companyName;
  public function __construct()
  {
    $this->companyName = parent::getCarName();
  }
}
$car1 = new superCar;
echo $car1->companyName;

// ERROR will be thrown
// echo Hyvor::getCompanyName();