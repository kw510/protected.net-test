<?php
namespace ProtectedNet\FrontendTest\Layouts;

use Packaged\Dispatch\ResourceManager;
use ProtectedNet\FrontendTestFramework\Layouts\DefaultLayout\DefaultLayout as GlobalDefaultLayout;

class DefaultLayout extends GlobalDefaultLayout
{
  /** TestDefaultLayout constructor.*/
  public function __construct()
  {
    ResourceManager::resources()->requireCss('styles/global.min.css', null, 20);
    ResourceManager::resources()->requireJs('js/libraries.min.js', [], 20);
  }
}
