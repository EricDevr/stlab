<?php
/* Smarty version 4.3.0, created on 2023-01-29 16:15:15
  from 'C:\xampp\htdocs\stlab\templates\home\portada.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6c5c3e33815_32664072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f89f6c034bcb2a13b1143dea4d1569878e3e66fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\home\\portada.html',
      1 => 1675019567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d6c5c3e33815_32664072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\stlab\\includes\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
