<?php
/* Smarty version 3.1.40, created on 2021-12-09 10:39:03
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\Publish\listFather.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b16c4748aa94_97117855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54eac2b7dca9bfc18fcaadb71593073d380a94c8' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\Publish\\listFather.html',
      1 => 1639017541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b16c4748aa94_97117855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>技术论坛_帖子列表页</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/public.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/list.css" />
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
		 <a>首页</a> &gt; <a>NBA</a>
	</div>
	<div id="main" class="auto">
		<div id="left">
			<div class="box_wrap">
				<h3>NBA</h3>
				<div class="num">
				    今日：<span>7</span>&nbsp;&nbsp;&nbsp;
				    总帖：<span><?php echo $_smarty_tpl->tpl_vars['artNum']->value;?>
</span>
				  <div class="moderator"> 子版块： <a>NBA</a> <a>CBA</a></div>
				</div>
				<div class="pages_wrap">
					<a class="btn publish" href="index.php?p=Home&c=Publish&a=index"></a>
					<div class="pages">
						<?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
			<div style="clear:both;"></div>
			<ul class="postsList">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artInfo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
				<li>
					<div class="smallPic">
						<a href="#">
							<img width="45" height="45" src="./Uploads/user/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_image'];?>
">
						</a>
					</div>
					<div class="subject">
						<div class="titleWrap"><a href="#">[分类]</a>&nbsp;&nbsp;<h2><a href="index.php?p=Home&c=Publish&a=showArticle&pub_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['pub_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['pub_title'];?>
</a></h2></div>
						<p>
							楼主：<?php echo $_smarty_tpl->tpl_vars['row']->value['pub_owner'];?>
&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['pub_time'],'%Y-%m-%d %H:%M:%S');?>
&nbsp;&nbsp;&nbsp;&nbsp;最后回复：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['last_time'],'%Y-%m-%d %H:%M:%S');?>

						</p>
					</div>
					<div class="count">
						<p>
							回复<br /><span><?php echo $_smarty_tpl->tpl_vars['row']->value['rep_nums'];?>
</span>
						</p>
						<p>
							浏览<br /><span><?php echo $_smarty_tpl->tpl_vars['row']->value['pub_hits'];?>
</span>
						</p>
					</div>
					<div style="clear:both;"></div>
				</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<div class="pages_wrap">
				<a class="btn publish" href="index.php?p=Home&c=Publish&a=index"></a>
				<div class="pages">
					<?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div id="right">
			<div class="classList">
				<div class="title">版块列表</div>
				<ul class="listWrap">
					<li>
						<h2><a href="#">NBA</a></h2>
						<ul>
							<li><h3><a href="#">乔丹</a></h3></li>
							<li><h3><a href="#">科比</a></h3></li>
							<li><h3><a href="#">库里</a></h3></li>
						</ul>
					</li>
					<li>
						<h2><a href="#">CBA</a></h2>
					</li>
				</ul>
			</div>
		</div>
		<div style="clear:both;"></div>
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
