<?php
namespace ProtectedNet\FrontendTest\Components\Panel;

use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Enum\Breakpoints;

class Panel extends AbstractComponent
{
  protected $_title;
  protected $_rightText;
  protected $_leftText;
  protected $_background;

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->_title;
  }

  /**
   * @param string $title
   *
   * @return $this
   */
  public function setTitle($title)
  {
    $this->_title = $title;

    return $this;
  }

  /**
   * @return string
   */
  public function getRightText()
  {
    return $this->_rightText;
  }

  /**
   * @param string $subtitle
   *
   * @return $this
   */
  public function setRightText($rightText)
  {
    $this->_rightText = $rightText;

    return $this;
  }

  /**
   * @return string
   */
  public function getLeftText()
  {
    return $this->_leftText;
  }

  /**
   * @param string $description
   *
   * @return $this
   */
  public function setLeftText($leftText)
  {
    $this->_leftText = $leftText;

    return $this;
  }

  public function getBackground(){
    return $this->_background;
  }
  public function setBackground($background){
    $this->_background = $background ;
    return $this;
  }
  

  /** @return string */
  public function getBlockName(): string
  {
    return 'panel';
  }


  /** @return $this */
  public static function i()
  {
    return new static();
  }

}