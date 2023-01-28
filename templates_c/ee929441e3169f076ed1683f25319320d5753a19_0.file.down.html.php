<?php
/* Smarty version 4.3.0, created on 2023-01-28 20:05:09
  from '/storage/emulated/0/htdocs/stlab/templates/down.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5aa25685373_44819453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee929441e3169f076ed1683f25319320d5753a19' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/down.html',
      1 => 1674947106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d5aa25685373_44819453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/stlab/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="m-views">
<h2 class="title-sect">Más vistos</h2>
<section>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MV_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
/" class="post-down">
<span><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['category'];?>
</span>
<img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
">
<h3><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," ");?>
</h3>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
</section><?php }
}
