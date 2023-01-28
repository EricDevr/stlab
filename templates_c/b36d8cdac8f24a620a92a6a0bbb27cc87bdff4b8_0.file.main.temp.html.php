<?php
/* Smarty version 4.3.0, created on 2023-01-28 16:42:09
  from 'C:\xampp\htdocs\stlab\templates\main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d57a91822905_10852591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36d8cdac8f24a620a92a6a0bbb27cc87bdff4b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\main.temp.html',
      1 => 1674934927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_login.html' => 1,
  ),
),false)) {
function content_63d57a91822905_10852591 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26043731963d57a91811db9_78514079', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/form_login.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147240983663d57a91817e76_35105172', "css");
?>

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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84010000763d57a91820e85_32520367', "left");
?>

        </section>
        <section class="right">right</section>
    </section>
    <section class="down">down</section>

</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1263329763d57a91821bc6_12482903', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_26043731963d57a91811db9_78514079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_26043731963d57a91811db9_78514079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_147240983663d57a91817e76_35105172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_147240983663d57a91817e76_35105172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_84010000763d57a91820e85_32520367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_84010000763d57a91820e85_32520367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "left"} */
/* {block "js"} */
class Block_1263329763d57a91821bc6_12482903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_1263329763d57a91821bc6_12482903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
