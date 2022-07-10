# 抖音小店SDK for Laravel

## 安装

1、通过`composer`安装扩展包。
```bash
composer require smartjson/laravel-doudian
```
2、发布配置文件。
```bash
php artisan vendor:publish --provider="SmartJson\DouDian\DouDianServiceProvider"
```
3、修改`config/doudian.php`中相关配置。
## 使用

``` php
$response = app('doudian')->shop->getShopCategory(['cid' => 0]);
dd($response);
```

支持多个授权店铺之间切换，默认不传参为最早授权的店铺

``` php
app('doudian')->setShopId($shopId)->order->orderDetail(["shop_order_id"=>'5557097346351159555']);
```

### 测试

``` bash
composer test
```

### 更新记录

查看[CHANGELOG](CHANGELOG.md)获取更详细的更新说明.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
