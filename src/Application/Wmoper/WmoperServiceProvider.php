<?php

namespace Hanson\Meituan\Application\Wmoper;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class WmoperServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['wmoper'] = function ($pimple) {
            return new Wmoper($pimple);
        };
    }
}
