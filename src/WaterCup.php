<?php namespace Garam\BasicComposer;

trait WaterCup  {

  private $liquid;

  public function getLiquid()
  {
    return $this->liquid;
  }

  public function setLiquid($liquid)
  {
    if($liquid < 0){
      throw new Exception("liquid must be positive", 1);
    }
    $this->liquid = $liquid;
  }

}

?>
