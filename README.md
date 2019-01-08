## wechat-backend

基于 [iBrand 第三方平台开发](https://github.com/ibrandcc/laravel-wechat-platform)的微信公众号管理后台。
使用前请自行安装[iBrand 后台管理](https://github.com/ibrandcc/backend)

#### 安装

```
composer require ibrand/wechat-backend:~1.0 -vvv
```

####配置

>在 config/app.php 注册 ServiceProvider (Laravel 5.5 无需手动注册)
```
'providers' => [
    // ...
    iBrand\Wechat\Backend\Providers\BackendServiceProvider::class,
],
```

>发布资源配置
```
php artisan vendor:publish --all
```

>初始化表数据
```
php artisan ibrand-wechat-backend:install
```

>需要配置好第三方平台服务 URL, CLIENT_ID 和 CLENT_SECRET




