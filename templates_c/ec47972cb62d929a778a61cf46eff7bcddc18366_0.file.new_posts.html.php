<?php
/* Smarty version 4.3.0, created on 2023-01-29 16:15:16
  from 'C:\xampp\htdocs\stlab\templates\home\new_posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6c5c40a4428_13906426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec47972cb62d929a778a61cf46eff7bcddc18366' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\home\\new_posts.html',
      1 => 1675019567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d6c5c40a4428_13906426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\stlab\\includes\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<h2 class="title-sec">Post Recientes</h2>
<section class="new-posts">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEW_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
/" class="new-post">
        <span><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['category'];?>
</span>
        <img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
">
        <h4><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," ");?>
</h4>
    </a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
