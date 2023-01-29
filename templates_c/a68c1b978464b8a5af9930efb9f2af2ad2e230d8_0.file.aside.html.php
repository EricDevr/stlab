<?php
/* Smarty version 4.3.0, created on 2023-01-29 16:20:15
  from 'C:\xampp\htdocs\stlab\templates\aside.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6c6ef707064_86261829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a68c1b978464b8a5af9930efb9f2af2ad2e230d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\aside.html',
      1 => 1675020013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d6c6ef707064_86261829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\stlab\\includes\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['POSTSASIDE']->value != "NULL") {?>
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
</section>
<?php }
}
}
