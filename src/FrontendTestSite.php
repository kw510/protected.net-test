<?php
namespace ProtectedNet\FrontendTest;

use Cubex\Cubex;
use Packaged\Routing\Handler\Handler;
use ProtectedNet\FrontendTest\Controllers\DefaultController;
use ProtectedNet\FrontendTestFramework\AbstractFrontendTestSite;
use ProtectedNet\FrontendTestFramework\Dispatch\Dispatcher;

class FrontendTestSite extends AbstractFrontendTestSite
{
  /**
   * FrontendTestSite constructor.
   *
   * @param Cubex $cubex
   */
  public function __construct(Cubex $cubex)
  {
    parent::__construct($cubex);

    // Resource Handler
    Dispatcher::i(dirname(__DIR__));
  }

  /** @return Handler */
  protected function _defaultHandler(): Handler
  {
    return new DefaultController();
  }
}
