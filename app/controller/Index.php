<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        if(request()->isGet()) {
            return view();
        }

        $data = [
            '这个问题和PHP有啥关系',
        ];

        halt($data);

        return json($data);
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
