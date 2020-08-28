<?php
namespace ProtectedNet\FrontendTest\Components\Percent;

use ProtectedNet\FrontendTest\Components\AbstractComponent;

class Percent extends AbstractComponent{
  
  protected $_percent;

  public function getBlockName(): string{
    return 'percent';
  }

  public static function i(){
    return new static();
  }

  public function setPercent($percent){
    $this->_percent = $percent;
    return $this;
  }
  public function getPercent(){
    return $this->_percent;
  }

}
