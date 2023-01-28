<?php
/* Smarty version 4.3.0, created on 2023-01-28 16:57:53
  from '/storage/emulated/0/htdocs/stlab/templates/main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d57e410b05b1_53385208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f91073edaa90d78cc88f83dd858667ca940a0a2d' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/main.temp.html',
      1 => 1674935856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_login.html' => 1,
  ),
),false)) {
function content_63d57e410b05b1_53385208 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84710625263d57e41063db2_45896648', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/form_login.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108082532163d57e41095091_55674658', "css");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141752862263d57e410aeb08_88668490', "left");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64185174063d57e410af878_68209871', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_84710625263d57e41063db2_45896648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_84710625263d57e41063db2_45896648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_108082532163d57e41095091_55674658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_108082532163d57e41095091_55674658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_141752862263d57e410aeb08_88668490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_141752862263d57e410aeb08_88668490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "left"} */
/* {block "js"} */
class Block_64185174063d57e410af878_68209871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_64185174063d57e410af878_68209871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
