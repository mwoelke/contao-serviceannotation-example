<?php

namespace MWoelke\ExampleServiceAnnotationBundle;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use MWoelke\ExampleServiceAnnotationBundle\ExampleServiceAnnotationBundle;


class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ExampleServiceAnnotationBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
