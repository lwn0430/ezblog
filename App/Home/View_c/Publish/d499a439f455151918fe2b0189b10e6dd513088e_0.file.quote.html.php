<?php
/* Smarty version 3.1.40, created on 2021-12-08 19:31:39
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\Publish\quote.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b0979b60b239_74432427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd499a439f455151918fe2b0189b10e6dd513088e' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\Publish\\quote.html',
      1 => 1638962618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b0979b60b239_74432427 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>技术论坛_引用回复页</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/public.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/publish.css" />
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
				<a class="hover" href="index.php?p=Home&c=Index&a=Index">首页</a>
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
	<div id="position" class="auto">
		 <a>首页</a> &gt; <a>NBA</a> &gt; <a>CBA</a> &gt;
	</div>
	<div id="publish">
		<div><?php echo $_smarty_tpl->tpl_vars['publishInfo']->value['pub_owner'];?>
: <?php echo $_smarty_tpl->tpl_vars['publishInfo']->value['pub_title'];?>
</div>
		<div class="quote">
			<p class="title">引用<?php echo $_smarty_tpl->tpl_vars['replyInfo']->value['rep_num'];?>
楼 <?php echo $_smarty_tpl->tpl_vars['replyInfo']->value['rep_user'];?>
 发表的: </p>
			<?php echo $_smarty_tpl->tpl_vars['replyInfo']->value['rep_content'];?>

		</div>
		<form method="POST" action="index.php?p=Home&c=Publish&a=dealQuote&pub_id=<?php echo $_smarty_tpl->tpl_vars['replyInfo']->value['rep_pub_id'];?>
&rep_id=<?php echo $_smarty_tpl->tpl_vars['replyInfo']->value['rep_id'];?>
">
			<textarea name="rep_content" class="content"></textarea>
			<input class="reply" type="submit" name="submit" value="" />
			<div style="clear:both;"></div>
		</form>
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
