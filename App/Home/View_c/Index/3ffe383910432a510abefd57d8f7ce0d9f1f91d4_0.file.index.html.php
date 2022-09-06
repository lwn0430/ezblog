<?php
/* Smarty version 3.1.40, created on 2021-12-09 10:38:25
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b16c213397b1_17665166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ffe383910432a510abefd57d8f7ce0d9f1f91d4' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\Index\\index.html',
      1 => 1639017503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b16c213397b1_17665166 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>论坛_首页</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/public.css" rel="stylesheet">
	<link href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/index.css" rel="stylesheet">
	<style type="text/css"></style>
	<?php echo '<script'; ?>
 type="text/javascript"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="header_wrap">
		<div id="header" class="auto">
			<div class="logo">技术论坛</div>
			<div class="nav">
				<a class="hover" href="index.php?p=Home&c=Index&a=index">首页</a>
				<a href="index.php?p=Home&c=Publish&a=showAllArticle">帖子</a>
			</div>
			<div class="serarch">
				<form>
					<input class="keyword" type="text" name="keyword" placeholder="搜索其实很简单" />
					<input class="submit" type="submit" name="submit" value="" />
				</form>
			</div>
			<div class="login">
				<?php 
					if(isset($_SESSION['userInfo']))
					{
						//说明用户已经登录，给出欢迎信息
						echo "<font color=#FFF>","欢迎您,",$_SESSION['userInfo']['user_name'],"</font>",'&nbsp;';
						echo '<a href="index.php?p=Home&c=User&a=image">上传头像</a>&nbsp;';
						echo '<a href="index.php?p=Home&c=User&a=logout">注销</a>';
					}else
					{
						echo '<a href="index.php?p=Home&c=User&a=login">登录</a>&nbsp;';
						echo '<a href="index.php?p=Home&c=User&a=register">注册</a>';
					}
				?>
			</div>
		</div>
	</div>
	<div style="margin-top:55px;"></div>
	<div id="hot" class="auto">
		<div class="title">最新消息</div>
		<ul class="newslist">
			<!-- 20条 -->
			<li><a href="#">[PHP技术]</a> <a href="#">才学的不是很懂，麻烦大家帮..</a></li>
			<li><a href="#">[Java技术]</a> <a href="#">
			java知识培训哪专业? </a></li>
			<li><a href="#">[Android技术]</a> <a href="#">6期两个男生也公主抱？这画面..</a></li>
			<li><a href="#">[网页技术]</a> <a href="#">
			html+css视频教程，免费，自取</a></li>
			<li><a href="#">[网络营销技术]</a> <a href="#">网络营销学院，3月强势进驻广州</a></li>
			<li><a href="#">[Android技术]</a> <a href="#">安卓9期就业班热闹开班典礼</a></li>
			<li><a href="#">[PHP技术]</a> <a href="#">做了4年php了，感觉什么都不懂。</a></li>
			<li><a href="#">[网页技术]</a> <a href="#">颜值爆表的网页班开学啦，女神在这</a></li>
			<li><a href="#">[PHP技术]</a> <a href="#">学习php有没有什么需要提前...</a></li>
			<li><a href="#">[Java技术]</a> <a href="#">
			求java ppt</a></li>
			<li><a href="#">[Android技术]</a> <a href="#">6期两个男生也公主抱？这画面..</a></li>
			<li><a href="#">[网页技术]</a> <a href="#">
			DW到期了，替换了Resources.dll..</a></li>
			<li><a href="#">[网络营销技术]</a> <a href="#">网络营销学院，3月强势进驻广州</a></li>
			<li><a href="#">[Android技术]</a> <a href="#">安卓5期就业班热闹开班典礼</a></li>
			<li><a href="#">[PHP技术]</a> <a href="#">
			PHP大神们看过来！！！</a></li>
			<li><a href="#">[网页技术]</a> <a href="#">颜值爆表的网页班开学啦，女神在这</a></li>	
		</ul>
		<div style="clear:both;"></div>
	</div>
	<div class="box auto">
		<div class="title">
			国际足球
		</div>
		<div class="classList">
			<div style="padding:10px 0;">暂无子版块...</div>
		</div>
	</div>
	<div class="box auto">
		<div class="title">
			CBA
		</div>
		<div class="classList">
			<div style="padding:10px 0;">暂无子版块...</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<div class="box auto">
		<div class="title">
			NBA
		</div>
		<div class="classList">
			<div class="childBox new">
				<h2><a href="#">A队</a> <span>(今日38)</span></h2>
				帖子：1939539<br />
			</div>
			<div class="childBox old">
				<h2><a href="#">B队</a> <span>(今日38)</span></h2>
				帖子：1939539<br />
			</div>
			<div class="childBox lock">
				<h2><a href="#">C队</a> <span>(今日38)</span></h2>
				帖子：1939539<br />
			</div>
			<div class="childBox new">
				<h2><a href="#">D队</a> <span>(今日38)</span></h2>
				帖子：1939539<br />
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<div id="footer" class="auto">
		<div class="bottom">
			<a>技术论坛</a>
		</div>
		<div class="copyright">Powered by zafu ©2018 bbs.com</div>
	</div>
</body>
</html><?php }
}
