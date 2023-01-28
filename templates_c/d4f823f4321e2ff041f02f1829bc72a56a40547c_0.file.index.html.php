<?php
/* Smarty version 4.3.0, created on 2023-01-28 15:26:49
  from '/storage/emulated/0/htdocs/stlab/templates/post/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d568e9c38e92_81583853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f823f4321e2ff041f02f1829bc72a56a40547c' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/post/index.html',
      1 => 1674930407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post/post.html' => 1,
    'file:post/comments.html' => 1,
  ),
),false)) {
function content_63d568e9c38e92_81583853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69863967763d568e9c2ab72_44907332', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65077411063d568e9c2c602_94587915', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120106853363d568e9c32db6_39073082', "left");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_69863967763d568e9c2ab72_44907332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_69863967763d568e9c2ab72_44907332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
title<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_65077411063d568e9c2c602_94587915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_65077411063d568e9c2c602_94587915',
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
class Block_120106853363d568e9c32db6_39073082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_120106853363d568e9c32db6_39073082',
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
