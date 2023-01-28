<?php
/* Smarty version 4.3.0, created on 2023-01-28 01:03:13
  from '/storage/emulated/0/htdocs/stlab/templates/publicar/form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d46641ed5a20_65417839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '327a6a8cc0447a7fd0cf2d2dc23a08810e4d9dfa' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/publicar/form.html',
      1 => 1674864151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d46641ed5a20_65417839 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" enctype="multipart/form-data" class="form-publicar">
    <input type="file" name="image">
    <input type="title" name="title" placeholder="Titulo">
    <div>
        <span class="bbcode">
            <a href=""><b>b</b></a>
            <a href=""><i>i</i></a>
        </span>
        <textarea class="content" name="content" placeholder="Contenido"></textarea>
    </div>
    <button type="button" id="btn-publicar">publicar</button>
</form><?php }
}
