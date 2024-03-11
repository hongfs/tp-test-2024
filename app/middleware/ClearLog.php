<?php
declare (strict_types = 1);

namespace app\middleware;

class ClearLog
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
        $response = $next($request);

        app('log')->close();

        return $response;
    }
}
