<?php

namespace Hanson\Meituan\Application\Wmoper\Core;

use Hanson\Foundation\Foundation;

class Api extends \Hanson\Meituan\Core\Api
{
    public function __construct(Foundation $app)
    {
        parent::__construct($app['access_token']);
    }
}
