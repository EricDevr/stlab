<?php
/* Smarty version 4.3.0, created on 2023-01-28 20:14:43
  from '/storage/emulated/0/htdocs/stlab/templates/main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5ac63085883_20199504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f91073edaa90d78cc88f83dd858667ca940a0a2d' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/main.temp.html',
      1 => 1674947653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_login.html' => 1,
    'file:aside.html' => 1,
  ),
),false)) {
function content_63d5ac63085883_20199504 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132046359563d5ac63065057_84330686', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/form_login.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34715491663d5ac63072873_10550290', "css");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19628445063d5ac63082ea9_04507788', "left");
?>

        </section>
        <section class="right">
            <?php $_smarty_tpl->_subTemplateRender("file:aside.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </section>
    </section>
    <section class="down"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151109479763d5ac63084341_17651245', "down");
?>
</section>

</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76930822763d5ac63084ec8_38390179', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_132046359563d5ac63065057_84330686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_132046359563d5ac63065057_84330686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_34715491663d5ac63072873_10550290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_34715491663d5ac63072873_10550290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_19628445063d5ac63082ea9_04507788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_19628445063d5ac63082ea9_04507788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "left"} */
/* {block "down"} */
class Block_151109479763d5ac63084341_17651245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_151109479763d5ac63084341_17651245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "down"} */
/* {block "js"} */
class Block_76930822763d5ac63084ec8_38390179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_76930822763d5ac63084ec8_38390179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
