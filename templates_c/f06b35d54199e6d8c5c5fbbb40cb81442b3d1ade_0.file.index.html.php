<?php
/* Smarty version 4.3.0, created on 2023-01-28 16:21:19
  from 'C:\xampp\htdocs\stlab\templates\publicar\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d575afe64b14_53038802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06b35d54199e6d8c5c5fbbb40cb81442b3d1ade' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\publicar\\index.html',
      1 => 1674933326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publicar/form.html' => 1,
  ),
),false)) {
function content_63d575afe64b14_53038802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204474541163d575afe56c14_89896238', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99321375063d575afe58175_15882298', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43886184663d575afe5c6a3_81165638', "left");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93288004663d575afe63808_60752731', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_204474541163d575afe56c14_89896238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_204474541163d575afe56c14_89896238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
publicar<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_99321375063d575afe58175_15882298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_99321375063d575afe58175_15882298',
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
class Block_43886184663d575afe5c6a3_81165638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_43886184663d575afe5c6a3_81165638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:publicar/form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "left"} */
/* {block "js"} */
class Block_93288004663d575afe63808_60752731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_93288004663d575afe63808_60752731',
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
