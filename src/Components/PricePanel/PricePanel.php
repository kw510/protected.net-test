<?php
namespace ProtectedNet\FrontendTest\Components\PricePanel;

use ProtectedNet\FrontendTest\Components\AbstractComponent;

class PricePanel extends AbstractComponent
{
  protected $_header;
  protected $_price;
  protected $_desc;
  protected $_list;

  public function getHeader()
  {
    return $this->_header;
  }

  public function setHeader($header){
    $this->_header = $header;
    return $this;
  }

  public function getPrice()
  {
    return $this->_price;
  }

  public function setPrice($price){
    $this->_price = $price;
    return $this;
  }

  public function getDesc()
  {
    return $this->_desc;
  }

  public function setDesc($desc){
    $this->_desc = $desc;
    return $this;
  }
  public function addToList($item){
    $this->_list .= $item;
  }

  public function setList($list){
    $this->_list = join("<li>", $list);
    return $this;
  }

  public function getList(){
    return $this->_list;
  }

  /** @return string */
  public function getBlockName(): string
  {
    return 'pricePanel';
  }

  /** @return $this */
  public static function i()
  {
    return new static();
  }

}