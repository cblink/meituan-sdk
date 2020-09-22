<?php

namespace Hanson\Meituan\Application\Wmoper\Order;

use Hanson\Meituan\Application\Wmoper\Core\Api;

class Order extends Api
{
    const QUERY_ORDERS_API = 'https://api-open-cater.meituan.com/wmoper/order/queryOrders';
    const QUERY_ORDER_DETAIL_API = 'https://api-open-cater.meituan.com/wmoper/order/queryOrderDetail';

    public function queryOrders(array $params)
    {
        return $this->request('get', [
            self::QUERY_ORDERS_API,
            $params,
        ]);
    }

    public function queryOrderDetail($params)
    {
        return $this->request('get', [
            self::QUERY_ORDER_DETAIL_API,[
            'orderId' => $params,
        ]]);
    }
}
