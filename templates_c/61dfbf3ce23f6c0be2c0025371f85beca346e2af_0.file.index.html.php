<?php
/* Smarty version 4.3.0, created on 2023-01-28 12:58:31
  from '/storage/emulated/0/htdocs/stlab/templates/home/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d54627e174b8_69669705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61dfbf3ce23f6c0be2c0025371f85beca346e2af' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/home/index.html',
      1 => 1674921487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/portada.html' => 1,
    'file:home/new_posts.html' => 1,
  ),
),false)) {
function content_63d54627e174b8_69669705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162273763463d54627dfc040_64107802', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135841263163d54627dfe8d3_52617278', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151085086863d54627e0fee6_26874542', "left");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_162273763463d54627dfc040_64107802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_162273763463d54627dfc040_64107802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inicio<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_135841263163d54627dfe8d3_52617278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_135841263163d54627dfe8d3_52617278',
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
class Block_151085086863d54627e0fee6_26874542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_151085086863d54627e0fee6_26874542',
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
