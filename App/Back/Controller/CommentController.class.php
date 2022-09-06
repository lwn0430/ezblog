<?php
//后台评论管理控制器
class CommentController extends PlatformController
{
    //显示评论管理页面
    public function indexAction()
    {
        //实例化模型
        $comment=Factory::M('CommentModel');
        //获取所有的评论信息
        $commentInfo=$comment->getComment();
        //分配变量到视图文件
        $this->assign('commentInfo',$commentInfo);
        //显示输出视图文件
        $this->display('index.html');
    }
}