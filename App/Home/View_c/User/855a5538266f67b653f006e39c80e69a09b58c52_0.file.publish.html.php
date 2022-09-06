<?php
/* Smarty version 3.1.40, created on 2021-12-04 17:26:03
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\User\publish.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ab342bc38457_08407973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '855a5538266f67b653f006e39c80e69a09b58c52' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\User\\publish.html',
      1 => 1638609961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab342bc38457_08407973 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>技术论坛_发帖页</title>
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
				<a class="hover">首页</a>
			</div>
			<div class="serarch">
				<form>
					<input class="keyword" type="text" name="keyword" placeholder="搜索其实很简单" />
					<input class="submit" type="submit" name="submit" value="" />
				</form>
			</div>
			<div class="login">
				<font color=#FFF>您好,<?php echo $_SESSION['userInfo']['user_name'];?>
,欢迎您的光临.</font>&nbsp;
				<a href="index.php?p=Home&c=User&a=login">登录</a>&nbsp;
				<a href="index.php?p=Home&c=User&a=register">注册</a>;
			</div>
		</div>
	</div>
	<div style="margin-top:55px;"></div>
	<div id="position" class="auto">
		 <a>首页</a> &gt; <a>NBA</a> &gt; <a>CBA</a> &gt;
	</div>
	<div id="publish">
		<form method="post">
			<select name="module_id">
				<option>请选择一个版块</option>
			</select>
			<input class="title" placeholder="请输入标题" name="title" type="text" />
			<textarea name="content" class="content"></textarea>
			<input class="publish" type="submit" name="submit" value="" />
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
