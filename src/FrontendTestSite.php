<?php
namespace ProtectedNet\FrontendTest;

use Packaged\Routing\Handler\Handler;
use ProtectedNet\FrontendTest\Controllers\DefaultController;
use ProtectedNet\FrontendTestFramework\AbstractFrontendTestSite;

class FrontendTestSite extends AbstractFrontendTestSite
{
  /** @return Handler */
  protected function _defaultHandler(): Handler
  {
    return new DefaultController();
  }
}
