<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\OpenPlatform\Server\Handlers;

use EasyWeChat\Kernel\Contracts\EventHandler;

/**
 * Class Unauthorized.
 *
 * @author mingyoung <mingyoungcheung@gmail.com>
 */
class Unauthorized implements EventHandler
{
    /**
     * {@inheritdoc}.
     */
    public function handle($message)
    {
        // Do nothing for the time being.
    }
}
