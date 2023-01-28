<?php
/* Smarty version 4.3.0, created on 2023-01-28 19:51:35
  from '/storage/emulated/0/htdocs/stlab/templates/home/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5a6f77a2b99_20899720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61dfbf3ce23f6c0be2c0025371f85beca346e2af' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/home/index.html',
      1 => 1674946255,
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
function content_63d5a6f77a2b99_20899720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72546639163d5a6f7794eb2_33836559', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30030532463d5a6f7796383_05413544', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7371007463d5a6f779bc78_12378865', "left");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175787486063d5a6f77a20a8_71831833', "down");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_72546639163d5a6f7794eb2_33836559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_72546639163d5a6f7794eb2_33836559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inicio<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_30030532463d5a6f7796383_05413544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_30030532463d5a6f7796383_05413544',
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
class Block_7371007463d5a6f779bc78_12378865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_7371007463d5a6f779bc78_12378865',
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
class Block_175787486063d5a6f77a20a8_71831833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_175787486063d5a6f77a20a8_71831833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:down.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "down"} */
}
