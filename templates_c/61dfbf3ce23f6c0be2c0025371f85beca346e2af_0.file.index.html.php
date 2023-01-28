<?php
/* Smarty version 4.3.0, created on 2023-01-28 01:43:52
  from '/storage/emulated/0/htdocs/stlab/templates/home/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d46fc8705900_67364498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61dfbf3ce23f6c0be2c0025371f85beca346e2af' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/home/index.html',
      1 => 1674866587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/portada.html' => 1,
  ),
),false)) {
function content_63d46fc8705900_67364498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144681883663d46fc86f6aa1_07664878', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44471873363d46fc86f9749_33829134', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22213600463d46fc8701870_72311457', "left");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_144681883663d46fc86f6aa1_07664878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_144681883663d46fc86f6aa1_07664878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inicio<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_44471873363d46fc86f9749_33829134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_44471873363d46fc86f9749_33829134',
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
class Block_22213600463d46fc8701870_72311457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_22213600463d46fc8701870_72311457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:home/portada.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "left"} */
}
