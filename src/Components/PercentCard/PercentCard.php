<?php
namespace ProtectedNet\FrontendTest\Components\PercentCard;

use Packaged\SafeHtml\ISafeHtmlProducer;
use ProtectedNet\FrontendTest\Components\FeatureCard\FeatureCard;
use ProtectedNet\FrontendTest\Components\Percent\Percent;
use ProtectedNet\FrontendTest\Enum\Breakpoints;

class PercentCard extends FeatureCard
{
  public static function i()
  {
    return new static();
  }

  public function getBlockName(): string
  {
    return 'percent-card';
  }

  public function setPercent($percent){
    $this->setIcon(Percent::i()->setPercent($percent));
    return $this;
  }
}