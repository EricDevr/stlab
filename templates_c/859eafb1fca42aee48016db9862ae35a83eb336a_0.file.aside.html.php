<?php
/* Smarty version 4.3.0, created on 2023-01-28 20:25:35
  from '/storage/emulated/0/htdocs/stlab/templates/aside.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5aeef024743_64330020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '859eafb1fca42aee48016db9862ae35a83eb336a' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/aside.html',
      1 => 1674948332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d5aeef024743_64330020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/stlab/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="aside">
<h2>Entretenimiento</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POSTSASIDE']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
/" class="post-aside">
<img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
">
<h3><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," ");?>
</h3>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
