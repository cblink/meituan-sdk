<?php

namespace Hanson\Meituan\Application\Wmoper\Ng\Poi;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class PoiServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['poi'] = function ($pimple) {
            return new Poi($pimple);
        };
    }
}
