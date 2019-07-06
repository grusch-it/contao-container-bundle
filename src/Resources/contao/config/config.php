<?php

/*
 * (c) Michael Gruschwitz
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_CTE']['container'] = array
(
  'containerStart' => 'ContentContainerStart',
  'containerStop'  => 'ContentContainerStop',
);

$GLOBALS['TL_WRAPPERS']['start'][] = 'containerStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'containerStop';
