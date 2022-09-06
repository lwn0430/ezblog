<?php
/* Smarty version 3.1.40, created on 2021-12-10 11:23:57
  from 'D:\PHP\phpstudy_pro\WWW\bbs.\App\Back\View\Category\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b2c84d969dc5_71768068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1bd575fb4d90f63059705acf8bf4683f6a4530d' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\bbs.\\App\\Back\\View\\Category\\edit.html',
      1 => 1639106598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_61b2c84d969dc5_71768068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>分类管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">修改分类</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Back&c=Category&a=dealEdit">
          <div class="form-group">
            <div class="label">
              <label for="sitename">分类名称</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="name" name="cate_name" size="50" placeholder="分类名称" data-validate="required:请填写您的分类名称" value="<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['module_name'];?>
" />
            </div>
          </div>
          <div class="form-button">
            <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['module_id'];?>
">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div style='height:20px; border-bottom:1px #DDD solid'></div>
  <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
