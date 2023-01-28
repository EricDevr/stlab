<?php
/* Smarty version 4.3.0, created on 2023-01-28 16:18:36
  from 'C:\xampp\htdocs\stlab\templates\home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5750c9b3619_44167857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c2e70f9358b2530b92e22e38003e23c42686f54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\home\\index.html',
      1 => 1674933326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/portada.html' => 1,
    'file:home/new_posts.html' => 1,
  ),
),false)) {
function content_63d5750c9b3619_44167857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144847214063d5750c8c74d0_99090984', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15665836863d5750c8c9823_83526181', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20585918763d5750c93ebf3_25777852', "left");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_144847214063d5750c8c74d0_99090984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_144847214063d5750c8c74d0_99090984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inicio<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_15665836863d5750c8c9823_83526181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_15665836863d5750c8c9823_83526181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/home.css">
<?php
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_20585918763d5750c93ebf3_25777852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_20585918763d5750c93ebf3_25777852',
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
}
