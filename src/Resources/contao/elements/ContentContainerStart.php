<?php

/*
 * (c) Michael Gruschwitz
 *
 * @license LGPL-3.0-or-later
 */

namespace Gruschit\Bundle\ContainerBundle\Elements;

/**
 * Front end content element "container" (wrapper start).
 */
class ContentContainerStart extends \Contao\ContentElement
{
  /**
   * Template
   * @var string
   */
  protected $strTemplate = 'ce_container_start';

  /**
   * Generate the content element
   */
  protected function compile()
  {
    if (TL_MODE == 'BE')
    {
      $this->strTemplate = 'be_wildcard';
      $this->Template = new \Contao\BackendTemplate($this->strTemplate);
      $this->Template->title = $this->headline;
    }
  }

  /**
   * Parse the template
   * @return string
   */
  public function generate()
  {
    parent::generate();

    $this->Template->class = trim('ce_' . str_replace('Start', '', $this->type) . ' ' . $this->cssID[1]);

    return $this->Template->parse();
  }
}

