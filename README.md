这个包是修改自 [Zizaco/confide](https://github.com/Zizaco/confide/tree/5.0) 的，仅是为了支持 `laravel 5.1.x`
### 安装
***
执行
```php
composer require einice/confide
```
***
注册服务提供者
```php

'providers' => [
    // ...
    Einice\Confide\ServiceProvider::class,
 ]
```
***
注册 Facade
```php

'aliases' => [
    // ...
    'Confide' => Einice\Confide\Facade::class,
 ]
```
***
生成数据库文件(需要删除 `database/migrations` 下的两个自带文件)
``` php
php artisan confide:migration --username
```
***
安装数据表
``` php
  php artisan migrate
```
***
修改 `user.php` 模型
``` php
<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Einice\Confide\ConfideUser;
use Einice\Confide\ConfideUserInterface;

class User extends Model implements ConfideUserInterface
{
    use ConfideUser;
}
```
***
生成控制器和路由
``` php
php artisan confide:controller --username
php artisan confide:routes
```
或者也可以生成 `RESTful` 风格的控制和路由
``` php
php artisan confide:controller --restful
php artisan confide:routes --restful
```
