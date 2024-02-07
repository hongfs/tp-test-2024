<?php
declare (strict_types = 1);

namespace app\demo\controller;

use app\middleware\Hongfs;

class Index
{
    // 控制器中间件，可行
//    protected $middleware = [
//        Hongfs::class,
//    ];

    public function index()
    {
        return '您好！这是一个[demo]示例应用';
    }
}
