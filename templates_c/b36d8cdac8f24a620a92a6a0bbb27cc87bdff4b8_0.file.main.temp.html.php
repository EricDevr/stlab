<?php
/* Smarty version 4.3.0, created on 2023-01-29 16:15:15
  from 'C:\xampp\htdocs\stlab\templates\main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6c5c3c43469_36482929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36d8cdac8f24a620a92a6a0bbb27cc87bdff4b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\main.temp.html',
      1 => 1675019567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_login.html' => 1,
    'file:aside.html' => 1,
  ),
),false)) {
function content_63d6c5c3c43469_36482929 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88881244463d6c5c3bd0f36_64695153', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/form_login.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168028997563d6c5c3bd26c4_95560856', "css");
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/aside.css">
</head>
<body>
<div id="fb-root"></div>
<?php echo '<script'; ?>
 async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="iAQLY8YN"><?php echo '</script'; ?>
>
<div class="content-page">
    <header>
        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/" class="title-page">STLAB</a></h1>
        <div class="btn-menu"><img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/icon-menu.png"></div>
        <div class="menu">
            <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/">inicio</a>
            <?php if ($_smarty_tpl->tpl_vars['USER']->value == "NONE") {?>
                <?php $_smarty_tpl->_subTemplateRender("file:form_login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/publicar/"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/logout/">logout</a>
            <?php }?>
        </div>
    </header>
    
    <section class="up">
        <section class="left">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201858713163d6c5c3c3fbb9_15441795', "left");
?>

        </section>
        <section class="right">
            <?php $_smarty_tpl->_subTemplateRender("file:aside.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </section>
    </section>
    <section class="down"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200019767963d6c5c3c41590_26594808', "down");
?>
</section>

</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56878332763d6c5c3c42709_41763805', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_88881244463d6c5c3bd0f36_64695153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_88881244463d6c5c3bd0f36_64695153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_168028997563d6c5c3bd26c4_95560856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_168028997563d6c5c3bd26c4_95560856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_201858713163d6c5c3c3fbb9_15441795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_201858713163d6c5c3c3fbb9_15441795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "left"} */
/* {block "down"} */
class Block_200019767963d6c5c3c41590_26594808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_200019767963d6c5c3c41590_26594808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "down"} */
/* {block "js"} */
class Block_56878332763d6c5c3c42709_41763805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_56878332763d6c5c3c42709_41763805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
