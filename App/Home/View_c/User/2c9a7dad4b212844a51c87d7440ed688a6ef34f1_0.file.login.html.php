<?php
/* Smarty version 3.1.40, created on 2021-12-04 17:03:53
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\User\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ab2ef9a28cd7_01957009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c9a7dad4b212844a51c87d7440ed688a6ef34f1' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\User\\login.html',
      1 => 1638607404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab2ef9a28cd7_01957009 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
		form{
			margin:0 auto;
			width:400px;
			height:300px;
			position:relative;
			border-radius:5px;
			box-shadow:
			0 0 2px rgba(0,0,0,.2),
			0 1px 1px rgba(0,0,0,.2),
			0 3px 0 #fff,
			0 4px 0 rgba(0,0,0,.2),
			0 6px 0 #fff,
			0 7px 0 rgba(0,0,0,.2);
		}
		form:before{
			content:"";
			position:absolute;
			z-index:-1;
			border:1px dashed #ccc;
			top:5px;
			bottom:5px;
			left:5px;
			right:5px;
			box-shadow:0 0 0 1px #fff;
		}
		h1{
			margin-top:30px;
			margin-bottom:40px;
			text-align:center;
			text-transform:uppercase;
			font:normal 26px Verdana,Helvetica;
			text-shadow:0 1px 0 rgba(255,255,255,.2),0 2px 0 rgba(0,0,0,.5);
			letter-spacing:4px;
			position:relative;
			color:#666;
		}
		h1:after,h1:before{
			content:"";
			background-color:#777;
			width:120px;
			top:15px;
			position:absolute;
			height:3px;
		}
		h1:before{
			left:20px;
			background-image:-moz-linear-gradient(right,#777,#fff);
		}
		h1:after{
			right:20px;
			background-image:-moz-linear-gradient(left,#777,#fff);
		}
		input{
			width:300px;
			display:block;
			height:25px;
			font-size:20px;
			margin:10px auto;
			border-radius:5px;
			border:1px solid #bbb;
		}
		input:focus{
			box-shadow:0 0 10px #ffff00;
		}
		input[type=submit]{
			color:#888;
			line-height:20px;
		}
		input[type=submit]:hover{
			color:#aaa;
			cursor:pointer;
		}
		form p{
			text-align:center;
		}
		form p a{
			margin:10px;font-weight:bold;color:#888;text-decoration:none;
		}
		form p a:hover{
			text-shadow:0 0 1px rgba(0,0,0,.2);
		}
		#username{
			border-radius:10px;
			text-indent:30px;
			background:url(images/icn_user.png) 6px center no-repeat;
		}
		#password{
			border-radius:10px;
			text-indent:30px;
			background:url(images/icn_security.png) 6px center no-repeat;
		}
	</style>
</head>
<body>
	<form method="POST" action="index.php?p=Home&c=User&a=dealLogin">
		<h1>Log in</h1>
		<input type="text" id="username" name="user_name" placeholder="UserName"/>
		<input type="password" id="password" name="user_pass" placeholder="Password"/>
		<label>
			<input type="checkbox" name="remember" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;七天免登录
		</label>
		<input type="submit" id="subit" value="提交"/>
		<p>
			<a href="#">Forget your password?</a>
		</p>
	</form>
</body>
</html>
<?php }
}
