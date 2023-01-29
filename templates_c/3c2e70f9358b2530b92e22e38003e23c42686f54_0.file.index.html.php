<?php
/* Smarty version 4.3.0, created on 2023-01-29 16:15:15
  from 'C:\xampp\htdocs\stlab\templates\home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6c5c3a5ed40_18442400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c2e70f9358b2530b92e22e38003e23c42686f54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\home\\index.html',
      1 => 1675019567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/portada.html' => 1,
    'file:home/new_posts.html' => 1,
    'file:down.html' => 1,
  ),
),false)) {
function content_63d6c5c3a5ed40_18442400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102246679263d6c5c3971913_38369759', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62323708163d6c5c3973d11_63913942', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191647397763d6c5c39e52a4_67101413', "left");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214266242863d6c5c3a5d699_14674340', "down");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_102246679263d6c5c3971913_38369759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_102246679263d6c5c3971913_38369759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inicio<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_62323708163d6c5c3973d11_63913942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_62323708163d6c5c3973d11_63913942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/home.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/down.css">
<?php
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_191647397763d6c5c39e52a4_67101413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_191647397763d6c5c39e52a4_67101413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:home/portada.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:home/new_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block "left"} */
/* {block "down"} */
class Block_214266242863d6c5c3a5d699_14674340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_214266242863d6c5c3a5d699_14674340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:down.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "down"} */
}
