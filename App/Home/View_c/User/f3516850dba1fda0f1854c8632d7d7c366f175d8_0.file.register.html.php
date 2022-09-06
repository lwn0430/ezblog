<?php
/* Smarty version 3.1.40, created on 2021-12-08 20:20:20
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\User\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b0a30446baa2_18120789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3516850dba1fda0f1854c8632d7d7c366f175d8' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\User\\register.html',
      1 => 1638962776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b0a30446baa2_18120789 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>论坛_注册页</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/public.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/register.css" />
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
				<a>新帖</a>
				<a>话题</a>
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
	<div id="register" class="auto">
		<h2>欢迎注册成为 BBS技术论坛会员</h2>
    <form method="POST" action="index.php?p=Home&c=User&a=dealRegister" enctype="multipart/form-data">
			<label>用户名：<input type="text" name='user_name' /><span>*6-10位，请使用英文字母、数字</span></label>
			<label>密码：<input type="password" name='user_password1' /><span>*6-10位，请使用英文字母、数字，注意区分大小写</span></label>
			<label>确认密码：<input type="password"  name='user_password2' /><span>*两次输入的密码必须一致</span></label>
			<label>验证码：<input name="vcode" type="text" /><span>*请输入下方验证码</span></label>
      <img src="index.php?p=Home&c=User&a=captcha" onclick="this.src='index.php?p=Home&c=User&a=captcha&n='+Math.random()" width="80" height="32" class="vcode"/>
			<div style="clear:both;"></div>
			<input class="btn" type="submit" value="确定注册" />
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
