<?php
namespace ProtectedNet\FrontendTest\Components\FeatureCard;

use Packaged\SafeHtml\ISafeHtmlProducer;
use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Traits\OrderedComponentTrait;

class FeatureCard extends AbstractComponent
{
  use OrderedComponentTrait;

  /** @var ISafeHtmlProducer */
  protected $_icon;

  /** @var string */
  protected $_title;

  /** @var string */
  protected $_subtitle;

  /** @var string */
  protected $_description;

  /** @return ISafeHtmlProducer|null */
  public function getIcon(): ?ISafeHtmlProducer
  {
    return $this->_icon;
  }

  /**
   * @param ISafeHtmlProducer $icon
   *
   * @return $this
   */
  public function setIcon(ISafeHtmlProducer $icon)
  {
    $this->_icon = $icon;

    return $this;
  }

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->_title;
  }

  /**
   * @param string $title
   *
   * @return $this
   */
  public function setTitle($title)
  {
    $this->_title = $title;

    return $this;
  }

  /**
   * @return string
   */
  public function getSubtitle()
  {
    return $this->_subtitle;
  }

  /**
   * @param string $subtitle
   *
   * @return $this
   */
  public function setSubtitle($subtitle)
  {
    $this->_subtitle = $subtitle;

    return $this;
  }

  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->_description;
  }

  /**
   * @param string $description
   *
   * @return $this
   */
  public function setDescription($description)
  {
    $this->_description = $description;

    return $this;
  }

  /** @return string */
  protected function _getTemplateClass(): string
  {
    return self::class;
  }

  /** @return string */
  public function getBlockName(): string
  {
    return 'feature-card';
  }

  /** @return $this */
  public static function i()
  {
    return new static();
  }

}
