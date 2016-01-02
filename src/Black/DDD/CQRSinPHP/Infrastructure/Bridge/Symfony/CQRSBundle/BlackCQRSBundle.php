<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\Bundle\CQRSBundle;

use Black\Bundle\CQRSBundle\DependencyInjection\BlackCQRSExtension;
use Symfony\Component\Console\Application;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class BlackCQRSBundle
 */
class BlackCQRSBundle extends Bundle
{
    /**
     * @return BlackCQRSExtension
     */
    public function getContainerExtension()
    {
        return new BlackCQRSExtension();
    }

    /**
     * {@inheritdoc}
     */
    public function registerCommands(Application $application)
    {
        return;
    }
}
