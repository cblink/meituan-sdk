<?php

namespace Hanson\Meituan\Application\Wmoper\Ng\Poi;

use Hanson\Meituan\Application\Wmoper\Core\Api;

/**
 * Class Poi
 * @package Hanson\Meituan\Application\Wmoper\Ng\Poi
 */
class Poi extends Api
{
    const M_GET_API = 'https://api-open-cater.meituan.com/wmoper/ng/poi/mget';

    /**
     * @param array|string $params
     * @return array
     */
    public function mGet($params)
    {
        $params = is_array($params) ? $params : [
            'epoiIds' => $params,
        ];

        return $this->request('post', [self::M_GET_API, [
            'biz' => $params,
        ]]);
    }
}
