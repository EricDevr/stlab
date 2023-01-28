<?php
/* Smarty version 4.3.0, created on 2023-01-28 16:23:20
  from 'C:\xampp\htdocs\stlab\templates\post\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5762892f449_85619948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00835ced4a6abc55a57f09aebadee96ff6cd08c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\post\\index.html',
      1 => 1674933326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post/post.html' => 1,
    'file:post/comments.html' => 1,
  ),
),false)) {
function content_63d5762892f449_85619948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75770541763d57628924813_44910341', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83347097563d57628926226_08722050', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33767232463d5762892ab86_16232778', "left");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_75770541763d57628924813_44910341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_75770541763d57628924813_44910341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
title<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_83347097563d57628926226_08722050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_83347097563d57628926226_08722050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/post.css">
<?php
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_33767232463d5762892ab86_16232778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_33767232463d5762892ab86_16232778',
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
}
