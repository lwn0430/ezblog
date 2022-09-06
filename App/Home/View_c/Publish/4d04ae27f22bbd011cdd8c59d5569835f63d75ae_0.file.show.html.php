<?php
/* Smarty version 3.1.40, created on 2021-12-09 10:41:19
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\Publish\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b16ccf14fca2_37704106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d04ae27f22bbd011cdd8c59d5569835f63d75ae' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\Publish\\show.html',
      1 => 1639017676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b16ccf14fca2_37704106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>技术论坛_帖子详情页</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/public.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/show.css" />
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
				<a href="index.php?p=Home&c=Index&a=Index">首页</a>
				<a class="hover" href="index.php?p=Home&c=Publish&a=showAllArticle">帖子</a>
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
	<div id="main" class="auto">
		<div class="wrap1">
			<div class="pages">
				<?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

			</div>
			<a class="btn reply" href="index.php?p=Home&c=Publish&a=replyArticle&pub_id=<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['pub_id'];?>
"></a>
			<div style="clear:both;"></div>
		</div>
		<div class="wrapContent">
			<div class="left">
				<div class="face">
					<a target="_blank" href="">
						<img width="160" height="160" src="./Uploads/user/<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['user_image'];?>
" />
					</a>
				</div>
				<div class="name">
					<a href=""><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['pub_owner'];?>
</a>
				</div>
			</div>
			<div class="right">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['pub_title'];?>
</h2>
					<span>阅读：<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['pub_hits'];?>
&nbsp;|&nbsp;回复：<?php echo $_smarty_tpl->tpl_vars['replynum']->value;?>
</span>
					<div style="clear:both;"></div>
				</div>
				<div class="pubdate">
					<span class="date">发布于：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['artInfo']->value['pub_time'],'%Y-%m-%d %H:%M:%S');?>
 </span>
					<span class="floor" style="color:red;font-size:14px;font-weight:bold;">楼主</span>
				</div>
				<div class="content">
					 <?php echo $_smarty_tpl->tpl_vars['artInfo']->value['pub_content'];?>

				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replyInfo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
		<div class="wrapContent">
			<div class="left">
				<div class="face">
					<a target="_blank" href="">
						<img width="160" height="160" src="./Uploads/user/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_image'];?>
" />
					</a>
				</div>
				<div class="name">
					<a href=""><?php echo $_smarty_tpl->tpl_vars['row']->value['rep_user'];?>
</a>
				</div>
			</div>
			<div class="right">
				
				<div class="pubdate">
					<span class="date">回复时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['rep_time'],'%Y-%m-%d %H:%M:%S');?>
</span>
					<span class="floor"><?php echo $_smarty_tpl->tpl_vars['row']->value['rep_num'];?>
楼&nbsp;|&nbsp;<a href="index.php?p=Home&c=Publish&a=quoteReply&pub_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['rep_pub_id'];?>
&rep_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['rep_id'];?>
">引用</a></span>
				</div>
				<div class="content">
					<?php if ($_smarty_tpl->tpl_vars['row']->value['rep_quote_id'] != 0) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['quoteReply'][0], array( array('rep_quote_id'=>$_smarty_tpl->tpl_vars['row']->value['rep_quote_id']),$_smarty_tpl ) );?>

					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['row']->value['rep_content'];?>

				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		
		<div class="wrap1">
			<div class="pages">
				<?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

			</div>
			<a class="btn reply" href="index.php?p=Home&c=Publish&a=replyArticle&pub_id=<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['pub_id'];?>
"></a>
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
