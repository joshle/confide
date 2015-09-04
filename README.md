这个包是修改自 [Zizaco/confide](https://github.com/Zizaco/confide/tree/5.0) 的，仅是为了支持 `laravel 5.1.x`
### 安装
***
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 87434a98ff153e76a3bfcddefc13a000b8bbf203
执行
```php
composer require einice/confide
```
***
注册服务提供者
```php
<<<<<<< HEAD

=======
=======
执行 `composer require einice/confide`
***
注册服务提供者
```ruby
>>>>>>> 2955b3a508851af0f053dba1ec9ffcffb6ed080f
>>>>>>> 87434a98ff153e76a3bfcddefc13a000b8bbf203
'providers' => [
    // ...
    Einice\Confide\ServiceProvider::class,
 ]
```
***
注册 Facade
<<<<<<< HEAD
```php

=======
<<<<<<< HEAD
```php
=======
```ruby
>>>>>>> 2955b3a508851af0f053dba1ec9ffcffb6ed080f
>>>>>>> 87434a98ff153e76a3bfcddefc13a000b8bbf203
'aliases' => [
    // ...
    'Confide' => Einice\Confide\Facade::class,
 ]
```
***
生成数据库文件(需要删除 `database/migrations` 下的两个自带文件)
<<<<<<< HEAD
``` php
=======
<<<<<<< HEAD
``` php
=======
``` ruby
>>>>>>> 2955b3a508851af0f053dba1ec9ffcffb6ed080f
>>>>>>> 87434a98ff153e76a3bfcddefc13a000b8bbf203
php artisan confide:migration --username
```
***
安装数据表
<<<<<<< HEAD
``` php
=======
<<<<<<< HEAD
``` php
=======
``` ruby
>>>>>>> 2955b3a508851af0f053dba1ec9ffcffb6ed080f
>>>>>>> 87434a98ff153e76a3bfcddefc13a000b8bbf203
  php artisan migrate
```
***
修改 `user.php` 模型
<<<<<<< HEAD
``` php
=======
<<<<<<< HEAD
``` php
=======
``` ruby
>>>>>>> 2955b3a508851af0f053dba1ec9ffcffb6ed080f
>>>>>>> 87434a98ff153e76a3bfcddefc13a000b8bbf203
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
<<<<<<< HEAD
``` php
=======
<<<<<<< HEAD
``` php
=======
``` ruby
>>>>>>> 2955b3a508851af0f053dba1ec9ffcffb6ed080f
>>>>>>> 87434a98ff153e76a3bfcddefc13a000b8bbf203
php artisan confide:controller --username
php artisan confide:routes
```
或者也可以生成 `RESTful` 风格的控制和路由
<<<<<<< HEAD
``` php
php artisan confide:controller --restful
=======

<<<<<<< HEAD
``` php
php artisan confide:controller --restful
=======
``` ruby
  php artisan confide:controller --restful
>>>>>>> 2955b3a508851af0f053dba1ec9ffcffb6ed080f
>>>>>>> 87434a98ff153e76a3bfcddefc13a000b8bbf203
php artisan confide:routes --restful
```
