<?php
namespace ProtectedNet\FrontendTest\Traits;

use ProtectedNet\FrontendTest\Enum\Breakpoints;

trait OrderedComponentTrait
{
  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function textRight(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointClass('text-right', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function textLeft(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointClass('text-left', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function textCenter(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointClass('text-center', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function iconLeft(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointModifier('icon-left', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function iconRight(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointModifier('icon-right', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function iconCenter(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointModifier('icon-center', ...$breakpoints);

    return $this;
  }

  /**
   * @param string $classname
   * @param array  ...$breakpoints
   */
  protected function _manageBreakpointClass(string $classname, ...$breakpoints)
  {

    if($breakpoints)
    {
      /** @var $breakpoint Breakpoints */
      foreach($breakpoints as $breakpoint)
      {
        if($breakpoint->is(Breakpoints::SMALL()))
        {
          $this->addClass($classname);
        }
        else
        {
          $this->addClass($breakpoint->getValue() . '-' . $classname);
        }
      }
    }
    else
    {
      $this->addClass($classname);
    }
  }

  /**
   * @param string $classname
   * @param mixed  ...$breakpoints
   */
  protected function _manageBreakpointModifier(string $classname, ...$breakpoints)
  {

    if($breakpoints)
    {
      foreach($breakpoints as $breakpoint)
      {
        $this->_addModifier($breakpoint->getValue() . '-' . $classname);
      }
    }
    else
    {
      $this->_addModifier($classname);
    }
  }

  /**
   * @param string ...$class
   *
   * @return mixed
   */
  abstract public function addClass(...$class);

  /**
   * @param string $class
   *
   * @return mixed
   */
  abstract protected function _addModifier(string $class);

}
