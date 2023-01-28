<?php
/* Smarty version 4.3.0, created on 2023-01-28 01:01:04
  from '/storage/emulated/0/htdocs/stlab/templates/publicar/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d465c027ab00_28968918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a091989efaa7285a3d0597defdc5f70d1fce0eae' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/publicar/index.html',
      1 => 1674864053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publicar/form.html' => 1,
  ),
),false)) {
function content_63d465c027ab00_28968918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102282066563d465c025b326_21253472', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177275815763d465c025f0c9_74374300', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191297585163d465c026ad12_17714568', "left");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38156707163d465c027a1a8_28253280', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_102282066563d465c025b326_21253472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_102282066563d465c025b326_21253472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
publicar<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_177275815763d465c025f0c9_74374300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_177275815763d465c025f0c9_74374300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/form_publicar.css">
<?php
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_191297585163d465c026ad12_17714568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_191297585163d465c026ad12_17714568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:publicar/form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "left"} */
/* {block "js"} */
class Block_38156707163d465c027a1a8_28253280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_38156707163d465c027a1a8_28253280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/form_publicar.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
