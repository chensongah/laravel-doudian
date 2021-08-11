<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Coupons extends BaseRequest
{
    /**
     * 卡券取消核销接口.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function cancelVerify(array $params): array
    {
        return $this->httpPost('coupons/cancelVerify', $params);
    }

    /**
     * 卡券废弃接口.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function abandon(array $params): array
    {
        return $this->httpPost('coupons/abandon', $params);
    }

    /**
     * 卡券同步.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function syncV2(array $params): array
    {
        return $this->httpPost('coupons/syncV2', $params);
    }

    /**
     * 卡券核销接口V2版本.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function verifyV2(array $params): array
    {
        return $this->httpPost('coupons/verifyV2', $params);
    }
}
