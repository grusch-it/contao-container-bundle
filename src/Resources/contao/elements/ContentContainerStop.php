<?php

/*
 * (c) Michael Gruschwitz
 *
 * @license LGPL-3.0-or-later
 */

namespace Gruschit\Bundle\ContainerBundle\Elements;

/**
 * Front end content element "container" (wrapper stop).
 */
class ContentContainerStop extends \Contao\ContentElement
{
  /**
   * Template
   * @var string
   */
  protected $strTemplate = 'ce_container_stop';

  /**
   * Generate the content element
   */
  protected function compile()
  {
    if (TL_MODE == 'BE')
    {
      $this->strTemplate = 'be_wildcard';
      $this->Template = new \Contao\BackendTemplate($this->strTemplate);
    }
  }
}

