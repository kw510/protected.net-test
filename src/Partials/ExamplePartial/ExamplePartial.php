<?php
namespace ProtectedNet\FrontendTest\Partials\ExamplePartial;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class ExamplePartial extends AbstractPartial
{
  /** @return string */
  protected function _getTemplateClass(): string
  {
    return self::class;
  }

  /** @return string */
  public function getBlockName(): string
  {
    return 'example-partial';
  }

  /** @return $this */
  public static function i()
  {
    return new static();
  }
}
