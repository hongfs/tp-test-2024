<?php
namespace app\index\controller;

use think\Queue;

class Index
{
    public function index()
    {
        Queue::push('app\index\job\Hongfs', ['id' => 1, 'name' => 'hongfs']);

        return '';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
