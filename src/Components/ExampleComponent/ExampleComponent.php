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

  /** @return string */
  protected function _getTemplateClass(): string
  {
    return self::class;
  }

  /** @return string */
  public function getBlockName(): string
  {
    return 'example-component';
  }

  /** @return $this */
  protected function _setPrimaryAttributes()
  {
    return $this->setAttribute($this->getBlockName(), true);
  }

  /** @return $this */
  public static function i()
  {
    return new static();
  }

  /**
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
