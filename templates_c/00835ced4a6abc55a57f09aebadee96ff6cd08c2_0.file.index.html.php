<?php
/* Smarty version 4.3.0, created on 2023-01-29 18:00:59
  from 'C:\xampp\htdocs\stlab\templates\post\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6de8b1813c2_52178199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00835ced4a6abc55a57f09aebadee96ff6cd08c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\post\\index.html',
      1 => 1675019567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post/post.html' => 1,
    'file:post/comments.html' => 1,
    'file:down.html' => 1,
  ),
),false)) {
function content_63d6de8b1813c2_52178199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139487985963d6de8b0f5d24_68956454', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62928990363d6de8b0f7869_03038120', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213769302063d6de8b103c15_58637295', "left");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75551806163d6de8b17fa33_33188093', "down");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_139487985963d6de8b0f5d24_68956454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_139487985963d6de8b0f5d24_68956454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
title<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_62928990363d6de8b0f7869_03038120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_62928990363d6de8b0f7869_03038120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/post.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/down.css">
<?php
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_213769302063d6de8b103c15_58637295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_213769302063d6de8b103c15_58637295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:post/post.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:post/comments.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block "left"} */
/* {block "down"} */
class Block_75551806163d6de8b17fa33_33188093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_75551806163d6de8b17fa33_33188093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:down.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "down"} */
}
