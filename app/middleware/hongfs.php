<?php
declare (strict_types = 1);

namespace app\middleware;

use think\Response;

class Hongfs
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        return json(['你被拦截了', $request->method()]);
    }
}
