<?php
/* Smarty version 4.3.0, created on 2023-01-28 00:25:40
  from '/storage/emulated/0/htdocs/stlab/templates/main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d45d74710aa0_91407691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f91073edaa90d78cc88f83dd858667ca940a0a2d' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/main.temp.html',
      1 => 1674861938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_login.html' => 1,
  ),
),false)) {
function content_63d45d74710aa0_91407691 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208595929563d45d746ff735_08895550', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/form_login.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67234173863d45d74705291_21705241', "css");
?>

</head>
<body>
<div class="content-page">
    <header>
        <h1><a href="" class="title-page">STLAB</a></h1>
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
            <?php }?>
        </div>
    </header>
    
    <section class="up">
        <section class="left">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100968989463d45d7470b698_67090129', "left");
?>

        </section>
        <section class="right">righr</section>
    </section>
    <section class="down">down</section>

</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66558775163d45d7470ff92_72793378', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_208595929563d45d746ff735_08895550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_208595929563d45d746ff735_08895550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_67234173863d45d74705291_21705241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_67234173863d45d74705291_21705241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "left"} */
class Block_100968989463d45d7470b698_67090129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left' => 
  array (
    0 => 'Block_100968989463d45d7470b698_67090129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "left"} */
/* {block "js"} */
class Block_66558775163d45d7470ff92_72793378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_66558775163d45d7470ff92_72793378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
