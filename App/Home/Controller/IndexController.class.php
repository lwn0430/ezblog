<?php 
//前台首页控制器
class IndexController extends Controller
{
    public function IndexAction()
    {
        session_start();
        //显示输出视图文件
        $this->display('index.html');
    }
}