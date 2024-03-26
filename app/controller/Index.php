<?php

namespace app\controller;

use app\BaseController;
use app\model\Job;

class Index extends BaseController
{
    public function index()
    {
        $data = Job::suffix('_zh')
            ->where('id', 11)
            ->find();

        var_dump($data);
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
