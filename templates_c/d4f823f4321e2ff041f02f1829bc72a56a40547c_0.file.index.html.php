<?php
/* Smarty version 4.3.0, created on 2023-01-28 20:06:55
  from '/storage/emulated/0/htdocs/stlab/templates/post/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5aa8f924267_72660647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f823f4321e2ff041f02f1829bc72a56a40547c' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/post/index.html',
      1 => 1674947213,
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
function content_63d5aa8f924267_72660647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55979741163d5aa8f912777_33368652', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40008245563d5aa8f9144c6_34835861', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191479747763d5aa8f9180e1_92665379', "left");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88836066863d5aa8f91dda9_46607787', "down");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_55979741163d5aa8f912777_33368652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_55979741163d5aa8f912777_33368652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
title<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_40008245563d5aa8f9144c6_34835861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_40008245563d5aa8f9144c6_34835861',
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
class Block_191479747763d5aa8f9180e1_92665379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_191479747763d5aa8f9180e1_92665379',
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
class Block_88836066863d5aa8f91dda9_46607787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_88836066863d5aa8f91dda9_46607787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:down.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "down"} */
}
