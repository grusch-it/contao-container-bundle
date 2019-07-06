<?php

/*
 * (c) Michael Gruschwitz
 *
 * @license LGPL-3.0-or-later
 */

namespace Gruschit\Bundle\ContainerBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Gruschit\Bundle\ContainerBundle\GruschitContainerBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            (new BundleConfig(GruschitContainerBundle::class))->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
