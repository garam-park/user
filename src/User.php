<?php namespace Garam\BasicComposer;

class User {
  use WaterCup;
  /**
   * @var integer
   */
  private $age = 20;
  /**
   * @var string
   */
  public $name = '박가람';

  // public $cup;
  //
  // public function setCup(Cup $cup)
  // {
  //   $this->cup = $cup;
  // }

  public function getCup()
  {
    return $this->cup;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge($age)
  {
    if($liquid < 0){
      throw new Exception("liquid must be positive", 1);
    }
    $this->age = $age;
  }

  public function getName()
  {
    return $this->name;
  }
}


?>
