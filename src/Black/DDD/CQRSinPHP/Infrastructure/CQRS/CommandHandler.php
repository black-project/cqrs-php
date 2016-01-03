<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\CQRSinPHP\Infrastructure\CQRS;

/**
 * Interface CommandHandler
 *
 * Every write operations represent a command and these commands will be executed by using a Command Handler.
 *
 * @see     http://weblogs.asp.net/shijuvarghese/cqrs-commands-command-handlers-and-command-dispatcher
 *
 * @author  Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
interface CommandHandler
{
    public function handle(Command $command);
}
