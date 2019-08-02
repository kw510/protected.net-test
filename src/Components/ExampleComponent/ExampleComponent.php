<?php
namespace ProtectedNet\FrontendTest\Components\ExampleComponent;

use Exception;
use Packaged\Dispatch\ResourceManager;
use ProtectedNet\FrontendTest\Components\AbstractComponent;

class ExampleComponent extends AbstractComponent
{
  public function __construct()
  {
    parent::__construct();
    $this->_setPrimaryAttributes();
  }

  /**
   * This is used to find the view
   *
   * @return string
   */
  protected function _getTemplateClass(): string
  {
    return self::class;
  }

  /**
   * All our styling used BEM, the name you enter here is the root name for BEM styling
   *
   * @return string
   */
  public function getBlockName(): string
  {
    return 'example-component';
  }

  /**
   * Used to set the blockname as an attribute on the component
   * This is used for linking it to typescript component of the same nam
   *
   * @return $this
   */
  protected function _setPrimaryAttributes()
  {
    return $this->setAttribute($this->getBlockName(), true);
  }

  /**
   * We use static i() methods to instantiate as it's shorter and easier to chain
   *
   * @return $this
   */
  public static function i()
  {
    return new static();
  }

  /**
   * The resource manager is used to load any resources that aren't being included by default
   * This is normally anything that's compiled local to the component or partial
   *
   * @param ResourceManager $manager
   *
   * @throws Exception
   */
  protected function _requireResources(ResourceManager $manager)
  {
    parent::_requireResources($manager);
    $manager->requireJs('ts/example-component.c.js');
  }

}
