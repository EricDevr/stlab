<?php
/* Smarty version 4.3.0, created on 2023-01-29 18:37:35
  from '/storage/emulated/0/htdocs/stlab/templates/post/post.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6e71fbe7dc3_61331909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a39906f914157279b57180b136ea23a2c4b34678' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/post/post.html',
      1 => 1675027594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d6e71fbe7dc3_61331909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/stlab/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="post">
<span class="date"><?php echo $_smarty_tpl->tpl_vars['POST']->value['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['POST']->value['category'];?>
</span>
<img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['POST']->value['image'];?>
" class="portada">
<h1 class="title-post"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['POST']->value['title'],"-"," ");?>
</h1>
<div class="content-post"><?php echo $_smarty_tpl->tpl_vars['POST']->value['content'];?>
</div>
</section><?php }
}
