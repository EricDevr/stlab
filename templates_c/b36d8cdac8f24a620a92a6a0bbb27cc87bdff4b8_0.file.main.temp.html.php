<?php
/* Smarty version 4.3.0, created on 2023-01-27 23:45:41
  from 'C:\xampp\htdocs\stlab\templates\main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d45415e9cd45_53652685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36d8cdac8f24a620a92a6a0bbb27cc87bdff4b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\main.temp.html',
      1 => 1674859540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_login.html' => 1,
  ),
),false)) {
function content_63d45415e9cd45_53652685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122605654063d45415e881c4_24376202', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/form_login.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180893723763d45415e8d027_62466866', "css");
?>

</head>
<body>
<div class="content-page">
    <header>
        <h1><a href="" class="title-page">STLAB</a></h1>
        <div class="btn-menu"><img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/icon-menu.png"></div>
        <div class="menu">
            <a href="">inicio</a>
            <?php if ($_smarty_tpl->tpl_vars['USER']->value == "NONE") {?>
                <?php $_smarty_tpl->_subTemplateRender("file:form_login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
            <?php }?>
        </div>
    </header>


</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41494540563d45415e9bfb9_83774292', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_122605654063d45415e881c4_24376202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_122605654063d45415e881c4_24376202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_180893723763d45415e8d027_62466866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_180893723763d45415e8d027_62466866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_41494540563d45415e9bfb9_83774292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_41494540563d45415e9bfb9_83774292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
