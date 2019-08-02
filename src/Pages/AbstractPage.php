<?php
namespace ProtectedNet\FrontendTest\Pages;

use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Partials\AbstractPartial;
use ProtectedNet\FrontendTestFramework\Pages\AbstractPage as GlobalAbstractPage;

abstract class AbstractPage extends GlobalAbstractPage
{
  /**
   * @return AbstractComponent|false|null
   */
  protected function _getHeroBanner()
  {
    return false;
  }

  /**
   * @return AbstractPartial|false|null
   */
  protected function _getFooter()
  {
    return false;
  }

  /**
   * @return AbstractPartial|false|null
   */
  protected function _getNav()
  {
    return false;
  }
}

