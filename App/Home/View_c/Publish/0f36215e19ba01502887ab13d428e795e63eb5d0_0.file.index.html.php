<?php
/* Smarty version 3.1.40, created on 2021-12-10 11:58:05
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\Publish\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b2d04dd81af3_03493820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f36215e19ba01502887ab13d428e795e63eb5d0' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\Publish\\index.html',
      1 => 1639108684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b2d04dd81af3_03493820 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src='/App/Home/Public/ckeditor/ckeditor.js'><?php echo '</script'; ?>
>
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
		<form method="post" action="index.php?p=Home&c=Publish&a=dealPublish">
			<select name="module_id">
				<option value="">请选择一个板块</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['moduleInfo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['module_id'];?>
"><?php echo preg_replace('!^!m',str_repeat('-',(5*$_smarty_tpl->tpl_vars['row']->value['level'])),$_smarty_tpl->tpl_vars['row']->value['module_name']);?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
			<input class="title" placeholder="请输入标题" name="pub_title" type="text" />
			<div>
				<textarea name="pub_content" id="ckeditor" class="content" rows="8" cols="50" placeholder="请填写文章内容" data-validate="required:请填写文章内容"></textarea>
				<?php echo '<script'; ?>
 type="text/javascript">
				 	CKEDITOR.replace('ckeditor');
				<?php echo '</script'; ?>
>
			</div>
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
