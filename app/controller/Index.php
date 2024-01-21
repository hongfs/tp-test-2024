<?php
namespace app\controller;

use app\BaseController;
use app\validate\hongfs;
use think\exception\ValidateException;

class Index extends BaseController
{
    public function index()
    {
        $data = [
            [
                'hongfs' => 'hongfs',
            ],
            [
                'hongfs' => '',
            ],
            [

            ],
            [
                'wangbingbing' => 1,
            ]
        ];

        foreach ($data as $value) {
            $this->test($value);
        }
    }

    function test(array $input = []) {
        try {
            validate(hongfs::class)->scene('edit')->check($input);
        } catch (ValidateException $e) {
            // 验证失败 输出错误信息
            var_dump($input, $e->getError());
            var_dump('-----------');
        }
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
