<?php
/* Smarty version 3.1.40, created on 2021-11-18 20:24:06
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Home\View\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619645e66a4506_26450384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcbf632331bd409cac1ae50f5240ec155fefed72' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Home\\View\\Index\\index.html',
      1 => 1637238184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/meta.html' => 1,
    'file:../Public/header.html' => 1,
    'file:../Public/copyright.html' => 1,
  ),
),false)) {
function content_619645e66a4506_26450384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->_subTemplateRender('file:../Public/meta.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/base.css" rel="stylesheet">
<link href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/index.css" rel="stylesheet">
<link href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php echo (defined('JS_DIR') ? constant('JS_DIR') : null);?>
/modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<div class="ibody">
  <?php $_smarty_tpl->_subTemplateRender('file:../Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <article>
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>????????????????????????????????????????????????????????????????????????</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>??????</span>??????</p>
      </h2>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommendArt']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
      <div class="blogs">
        <h3><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></h3>
        <figure><img src="/Uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['row']->value['thumb'];?>
" ></figure>
        <ul>
          <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['row']->value['content']),100,'...');?>
</p>
          <a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
" target="_blank" class="readmore">????????????&gt;&gt;</a>
        </ul>
        <p class="autor"><span>?????????<?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
</span><span>????????????<a href="/"><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a>???</span><span>?????????<a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
</a>???</span>?????????<a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['reply_nums'];?>
</a>???</span></p>
        <div class="dateview"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['addtime'],"%Y-%m-%d");?>
</div>
      </div>
      <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
      <div class="blogs">
        ?????????????????????????????????
      </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>??????zhouyang</span></a></div>
    <div class="topspaceinfo">
      <h1>???????????????????????????</h1>
      <p>???????????????????????????????????????????????????....</p>
    </div>
    <div class="about_c">
      <p>?????????<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['nickname'];?>
</p>
      <p>?????????<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['job'];?>
 </p>
      <p>?????????<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['home'];?>
</p>
      <p>?????????<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['tel'];?>
</p>
      <p>?????????<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['email'];?>
</p>
    </div>
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="?????????QQ??????"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="?????????????????????"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="?????????????????????"></a><a href="#" class="bds_renren" data-cmd="renren" title="??????????????????"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="???????????????"></a></div>

<?php echo '<script'; ?>
>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"????????????","viewSize":"24"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];<?php echo '</script'; ?>
>  

    <div class="tj_news">
      <h2>
        <p class="tj_t1">????????????</p>
      </h2>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newArt']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <li><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <h2>
        <p class="tj_t2">????????????</p>
      </h2>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rmdArtByHits']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <li><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>????????????</p>
      </h2>
      <ul>
        <li><a href="#">????????????</a></li>
        <li><a href="#">??????</a></li>
      </ul>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:../Public/copyright.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </aside>
  <?php echo '<script'; ?>
 src="<?php echo (defined('JS_DIR') ? constant('JS_DIR') : null);?>
/silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- ???????????? --> 
</div>
</body>
</html>
<?php }
}
