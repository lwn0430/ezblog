<?php
/* Smarty version 3.1.40, created on 2021-12-06 10:50:46
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Home\View\User\image.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ad7a86c531c7_84911664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f24002b9e6895950cd4943f104b9f5651fddbc7' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Home\\View\\User\\image.html',
      1 => 1638757938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ad7a86c531c7_84911664 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>请上传头像</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST" action="index.php?p=Home&c=User&a=uploadImage" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="点击上传">
    </form>
</body>
</html><?php }
}
