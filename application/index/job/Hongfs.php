<?php
namespace  app\index\job;

use think\queue\Job;

class Hongfs
{
    public function fire(Job  $job, $data)
    {
        require_once \think\Container::get('env')->get('app_path') . 'index/common.php';

        $fun1 = fun1();

        if($fun1 == '111') {
            echo 'success';
        } else {
            echo 'fail';
        }

        $fun2 = func2();

        if($fun2 == '222') {
            echo 'success';
        } else {
            echo 'fail';
        }

        $job->delete();
    }
}
