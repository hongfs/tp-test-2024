<?php
declare (strict_types = 1);

namespace app\middleware;

use think\App;

class hongfs
{

    /** @var App */
    protected $app;

    public function __construct(App $app)
    {
        $this->app  = $app;
    }

    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        $appName    = $this->app->http->getName();

        var_dump($appName);

        return $next($request);
    }
}
