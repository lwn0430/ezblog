<?php 
//前台文章管理控制器
class PublishController extends Controller
{
    //栏目首页动作
    public function indexAction()
    {
        @session_start();
        //得到所有文章板块
        $moduleInfo=array();
        $module=Factory::M('PublishModel');
        $moduleInfo=$module->getAllModule();
        $this->assign('moduleInfo',$moduleInfo);

        $this->display('index.html');
    }
    public function is_loginAction()
    {
        //判断用户是否登录
        @session_start();
        if(!isset($_COOKIE['user_id']))
        {
            if(!isset($_SESSION['userInfo']))
            {
                jump('index.php?p=Home&c=Index&a=index',':(请您先登录!');
            }
        }
    }
    public function dealPublishAction()
    {
        //为文章入库作准备
        $pubInfo=array();
        $pub_title=$this->escapeData($_POST['pub_title']);
        $pub_content=$this->escapeData($_POST['pub_content']);
        $module_id=isset($_POST['module_id'])?$_POST['module_id']:'1';
        //判断标题和内容的合法性
        if(empty($pub_content) || empty($pub_title))
        {
            //非法，跳转
            $this->jump('index.php?p=Home&c=Publish&a=index',':(标题和内容不能为空');
        }
        session_start();
        $pub_owner=$_SESSION['userInfo']['user_name'];
        $pub_time=time();
        //往pubInfo数组存入数据
        $pubInfo['pub_title']=$pub_title;
        $pubInfo['pub_content']=$pub_content;
        $pubInfo['pub_owner']=$pub_owner;
        $pubInfo['pub_time']=$pub_time;
        $pubInfo['module_id']=$module_id;
        $publish=Factory::M('PublishModel');
        //数据入库
        $result=$publish->insertPublish($pubInfo);
        //判断是否成功入库
        if($result)
        {
            //发帖成功
            $this->jump('index.php?p=Home&c=Publish&a=showAllArticle');      //跳转到帖子列表页面
        }else{
            //发帖失败
            $this->jump('index.php?p=Home&c=Publish&a=index',':(发生未知错误，发帖失败!');
        }
    }
    //展示所有文章
    public function showAllArticleAction()
    {
        //判断用户是否登录
        @session_start();
        if(!isset($_COOKIE['user_id']))
        {
            if(!isset($_SESSION['userInfo']))
            {
                $this->jump('index.php?p=Home&c=Index&a=index',':(请您先登录!');
            }
        }
        //得到所有文章
        $artInfo=array();
        $art=Factory::M('PublishModel');
        $artInfo=$art->getAllArticle();
        $artNum=$art->getArtNum();
        $this->assign('artNum',$artNum);
        $this->assign('artInfo',$artInfo);
        //以下代码与分页有关
        $rowsPerPage=$GLOBALS['conf']['Page']['rowsPerPage'];
        $maxNum=$GLOBALS['conf']['Page']['maxNum'];
        $url="index.php?p=Home&c=Publish&a=showAllArticle&";
        //查询总记录数
        $rowCount=$art->getPublishNum();
        //实例化分页类
        $page=new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage=$page->getStrPage();
        //分配页码字符串
        $this->assign('strPage',$strPage);
        //分页到此结束 

        $this->display('listFather.html');
    }
    //展示该篇文章
    public function showArticleAction()
    {
        //判断用户是否登录
        @session_start();
        if(!isset($_COOKIE['user_id']))
        {
            if(!isset($_SESSION['userInfo']))
            {
                $this->jump('index.php?p=Home&c=Index&a=index',':(请您先登录!');
            }
        }
        //获取帖子的id号
        $pub_id=$_GET['pub_id'];        //楼主帖子的id号
        $rep_pub_id=$pub_id;            //数据库中两表的名称是一样的，为了清晰
        //得到楼主的帖子的信息
        $artInfo=array();
        $art=Factory::M('PublishModel');
        //更新点击次数
        //先判断是从哪儿进入该帖子的，如果是回帖进入的，不计入hits,判断do是否为reply
        if(!$_GET['do'])
        {
            $art->updateArticleHits($pub_id);
        }
        //展示楼主（该）帖子的信息
        $artInfo=$art->getThisArticle($pub_id);
        $this->assign('artInfo',$artInfo);
        
        //提取回帖的资源结果集
        $reply=Factory::M('PublishModel');
        $replyInfo=$reply->getReplyInfo($rep_pub_id);
        $replynum=$reply->getReplyNum($rep_pub_id);
        $i=1;       //记录楼数
        //分配数据
        $this->assign('replyInfo',$replyInfo);
        $this->assign('replynum',$replynum);
        $this->assign('i',$i);
        //以下代码与分页有关
        $rowsPerPage=$GLOBALS['conf']['Page']['rowsPerPage'];
        $maxNum=$GLOBALS['conf']['Page']['maxNum'];
        $url="index.php?p=Home&c=Publish&a=showArticle&pub_id=$pub_id&";
        //查询总记录数
        $rowCount=$reply->getReplyNum($rep_pub_id);
        //实例化分页类
        $page=new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage=$page->getStrPage();
        //分配页码字符串
        $this->assign('strPage',$strPage);
        //分页到此结束 
        //定义递归函数,递归输出引用贴
        function quoteReply($arr)
        {
            $ry=Factory::M('PublishModel');
            $rep_quote_id=$arr['rep_quote_id'];
            $beQuoReplyInfo=$ry->getBeQuoteReplyInfo($rep_quote_id);
            echo "<div class='quote'>";
            if($beQuoReplyInfo['rep_quote_id'])
            {
                
                $arr=array("rep_quote_id"=>$beQuoReplyInfo['rep_quote_id']);
                //quoteReply($reply['rep_quote_id']);
                quoteReply($arr);
            }
            echo "<h2>引用".$beQuoReplyInfo['rep_num']."楼".$beQuoReplyInfo['rep_user']."发表的:</h2>";
            echo $beQuoReplyInfo['rep_content'];
            echo "</div>";
        }
        $this->smarty->register_function("quoteReply","quoteReply");

        $this->display('show.html');
    }
    //显示发布回帖的页面
    public function replyArticleAction()
    {
        //获取帖子的id号
        $pub_id=$_GET['pub_id'];        //楼主帖子的id号
        //得到楼主的帖子的信息
        $artInfo=array();
        $art=Factory::M('PublishModel');
        //展示帖子的信息
        $artInfo=$art->getThisArticle($pub_id);
        $this->assign('artInfo',$artInfo);

        $this->display('reply.html');
    }
    //处理回帖的点击回复按钮动作
    public function dealReplyAction()
    {
        //接收回帖的表单数据
        $repInfo=array();
        $pub_id=$rep_pub_id=$_POST['pub_id'];
        $repInfo['rep_pub_id']=$rep_pub_id;
        $repInfo['rep_content']=$this->escapeData($_POST['rep_content']);
        //验证数据
        if(empty($repInfo['rep_content']))
        {
            //非法，跳转
            $this->jump("index.php?p=Home&c=Publish&a=replyArticle&pub_id=$pub_id",':(回复的内容不能为空!');    
            //双引号，将$pub_id 转出来
        }
        //数据入库
        session_start();
        $repInfo['rep_user']=$_SESSION['userInfo']['user_name'];
        $repInfo['rep_time']=time();
        $reply=Factory::M('PublishModel');
        $repInfo['rep_num']=$reply->getReplyNum($rep_pub_id)+1;     //提取之前的回帖数量，+1，因为你这篇马上要发了

        $result=$reply->insertReply($repInfo);
        //判断执行结果
        if($result)
        {
            //入库成功，跳转
            $this->jump("index.php?p=Home&c=Publish&a=showArticle&pub_id=$pub_id&do=reply");
        }else{
            //入库失败
            $this->jump("index.php?p=Home&c=Publish&a=replyArticle&pub_id=$pub_id",':(发生未知错误，回帖失败!');   
        }
    }
    //显示引用的编辑界面
    public function quoteReplyAction()
    {
        //接收数据
        $pub_id=$_GET['pub_id'];        //楼主(主贴)的id
        $rep_id=$_GET['rep_id'];        //被引用帖子(回帖)的 id
        //提取楼主(主贴)的信息
        $publish=Factory::M('PublishModel');
        $publishInfo=$publish->getPrimaryInfo($pub_id);
        //提取被引用帖子的信息
        $replyInfo=$publish->getQuoteInfo($rep_id);
        //分发参数
        $this->assign('publishInfo',$publishInfo);
        $this->assign('replyInfo',$replyInfo);

        $this->display('quote.html');
    }
    //处理引用编辑界面的提交
    public function dealQuoteAction()
    {
        //1.接收数据
        $rep_content=$this->escapeData($_POST['rep_content']);      //回复的内容
        $rep_pub_id=$pub_id=$_GET['pub_id'];            //楼主（主贴）的ID
        $rep_quote_id=$rep_id=$_GET['rep_id'];          //被引用的回帖的id
        //2.判断数据的合法性
        if(empty($rep_content))
        {
            //非法
            $this->jump("index.php?p=Home&c=Publish&a=quoteReply&pub_id=$pub_id&rep_id=$rep_id",':(内容不能为空!');
        }
        //数据入库
        $quote=Factory::M('PublishModel');
        session_start();
        $quoteInfo=array();
        //      回复的内容
        $quoteInfo['rep_content']=$rep_content;
        //      楼主（主贴）的ID
        $quoteInfo['rep_pub_id']=$rep_pub_id;
        //      被引用的回帖的ID
        $quoteInfo['rep_quote_id']=$rep_quote_id;
        //      提取回复人的名字
        $quoteInfo['rep_user']=$_SESSION['userInfo']['user_name'];
        //      引用回复的时间
        $quoteInfo['rep_time']=time();
        //      获取主贴的回帖总数来确定是第几楼      因为发布成功就多一条所以要加1
        $quoteInfo['rep_num']=$quote->getReplyNum($rep_pub_id)+1;
        //插入引用贴
        $result=$quote->insertQuoteInfo($quoteInfo);
        //判断执行的结果
        if($result)
        {
            //入库成功      跳转到主贴，也就是楼主贴,这时也是hit（点击数）不应该增加
            $this->jump("index.php?p=Home&c=Publish&a=showArticle&pub_id=$pub_id&do=quote");
        }else{
            //入库失败
            $this->jump("index.php?p=Home&c=Publish&a=quoteReply&pub_id=$pub_id&rep_id=$rep_id",':(发生未知错误，回帖失败!');
        }

    }
}