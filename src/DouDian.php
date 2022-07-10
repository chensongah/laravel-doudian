<?php

namespace SmartJson\DouDian;

use SmartJson\DouDian\Api\AfterSale;
use SmartJson\DouDian\Api\Alliance;
use SmartJson\DouDian\Api\AntiSpam;
use SmartJson\DouDian\Api\Bats;
use SmartJson\DouDian\Api\Brand;
use SmartJson\DouDian\Api\BuyIn;
use SmartJson\DouDian\Api\Coupons;
use SmartJson\DouDian\Api\CrossBorder;
use SmartJson\DouDian\Api\DutyFree;
use SmartJson\DouDian\Api\FreightTemplate;
use SmartJson\DouDian\Api\Iop;
use SmartJson\DouDian\Api\Logistics;
use SmartJson\DouDian\Api\Material;
use SmartJson\DouDian\Api\Member;
use SmartJson\DouDian\Api\OpenCloud;
use SmartJson\DouDian\Api\Order;
use SmartJson\DouDian\Api\OrderCode;
use SmartJson\DouDian\Api\Product;
use SmartJson\DouDian\Api\Recycle;
use SmartJson\DouDian\Api\Security;
use SmartJson\DouDian\Api\Shop;
use SmartJson\DouDian\Api\Sms;
use SmartJson\DouDian\Api\Spu;
use SmartJson\DouDian\Api\Storage;
use SmartJson\DouDian\Api\SupplyChain;
use SmartJson\DouDian\Api\Token;
use SmartJson\DouDian\Api\Topup;
use SmartJson\DouDian\Api\WareHouse;
use SmartJson\DouDian\Api\Yunc;
use Exception;
use Illuminate\Support\Str;

/**
 * Class DouDian.
 *
 * @property AfterSale   $afterSale
 * @property Alliance    $alliance
 * @property AntiSpam    $antiSpam
 * @property Bats        $bats
 * @property Brand       $brand
 * @property BuyIn       $buyIn
 * @property Coupons     $coupons
 * @property CrossBorder $crossBorder
 * @property DutyFree    $dutyFree
 * @property FreightTemplate    $freightTemplate
 * @property Logistics   $logistics
 * @property Iop         $iop
 * @property Material    $material
 * @property Member      $member
 * @property OpenCloud   $openCloud
 * @property Order       $order
 * @property OrderCode   $orderCode
 * @property Product     $product
 * @property Recycle     $recycle
 * @property Security    $security
 * @property Shop        $shop
 * @property Sms         $sms
 * @property Storage     $storage
 * @property SupplyChain $supplyChain
 * @property Spu         $spu
 * @property Token       $token
 * @property Topup       $topup
 * @property WareHouse   $wareHouse
 * @property Yunc        $yunc
 */
class DouDian
{
    private $config;
    private $shop_id = null;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function __get($class)
    {
        $class = '\\SmartJson\\DouDian\\Api\\'.Str::ucfirst($class);
        if (! class_exists($class)) {
            throw new Exception($class.', Not found', 404);
        }

        return new $class($this->config, $this->shop_id);
    }

    /**
     * 设定店铺ID.
     *
     * @param int $shopId
     *
     * @return $this
     */
    public function setShopId(int $shopId): self
    {
        $this->shop_id = $shopId;

        return $this;
    }

    /**
     * 获取店铺ID.
     *
     * @return mixed|null
     */
    public function getShopId()
    {
        return $this->shop_id;
    }
}
