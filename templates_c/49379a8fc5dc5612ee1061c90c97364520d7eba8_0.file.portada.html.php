<?php
/* Smarty version 4.3.0, created on 2023-01-28 17:14:43
  from '/storage/emulated/0/htdocs/stlab/templates/home/portada.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d582338ef7c1_85642485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49379a8fc5dc5612ee1061c90c97364520d7eba8' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/home/portada.html',
      1 => 1674936843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d582338ef7c1_85642485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/stlab/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="portada">
<span><?php echo $_smarty_tpl->tpl_vars['PORTADA']->value['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['PORTADA']->value['category'];?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['PORTADA']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PORTADA']->value['title'];?>
/" style="text-decoration:none;">
<h1><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PORTADA']->value['title'],"-"," ");?>
</h1>
<img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['PORTADA']->value['image'];?>
">
</a>
</section><?php }
}
