<?php

/*
 * (c) Michael Gruschwitz
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_CTE']['container'] = array
(
  'containerStart' => \Gruschit\Bundle\ContainerBundle\Elements\ContentContainerStart::class,
  'containerStop'  => \Gruschit\Bundle\ContainerBundle\Elements\ContentContainerStop::class,
);

$GLOBALS['TL_WRAPPERS']['start'][] = 'containerStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'containerStop';
