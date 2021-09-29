<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Alliance extends BaseRequest
{
    /**
     * 查询联盟订单明细.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function getOrderList(array $params): array
    {
        return $this->httpPost('alliance/getOrderList', $params);
    }

    /**
     * 检索精选联盟商品.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function materialsProductsSearch(array $params): array
    {
        return $this->httpPost('alliance/materialsProductsSearch', $params);
    }
}
