<?php

namespace Hanson\Meituan\Application\Wmoper;

use Hanson\Foundation\Foundation;
use Hanson\Meituan\Application\Wmoper\Ng\Poi\PoiServiceProvider;
use Hanson\Meituan\Application\Wmoper\Order\OrderServiceProvider;

/**
 * Class Wmoper
 * @package Hanson\Meituan\Application\Wmoper
 *
 * @property-read \Hanson\Meituan\Application\Wmoper\Ng\Poi\Poi $poi
 * @property-read \Hanson\Meituan\Application\Wmoper\Order\Order $order
 */
class Wmoper extends Foundation
{
    protected $providers = [
        PoiServiceProvider::class,
        OrderServiceProvider::class,
    ];

    public function __construct(Foundation $app)
    {
        parent::__construct($app->getConfig());

        $this['access_token'] = $app['access_token'];
    }
}
