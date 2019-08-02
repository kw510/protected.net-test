<?php
namespace ProtectedNet\FrontendTest\Controllers;

use Generator;
use Packaged\Routing\Handler\Handler;
use Packaged\Routing\Route;
use ProtectedNet\FrontendTest\Pages\HomePage\HomePage;
use ProtectedNet\FrontendTestFramework\Controllers\AbstractController;

class DefaultController extends AbstractController
{
  /** @return callable|Handler|Route[]|Generator|string */
  protected function _generateRoutes()
  {
    yield self::_route('/(|home)$', 'homePage');
    return 'default';
  }

  /** @return string */
  public function getDefault()
  {
    return 'OK';
  }

  /** @return HomePage */
  public function getHomePage()
  {
    return HomePage::i();
  }
}
