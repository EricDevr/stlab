<?php
/* Smarty version 4.3.0, created on 2023-01-29 17:29:42
  from 'C:\xampp\htdocs\stlab\templates\publicar\form_upload_image.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6d736ce4413_75572337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27401a363664202849f88ade1439befd14234e40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\publicar\\form_upload_image.html',
      1 => 1675024181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d6d736ce4413_75572337 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-form-u-image">
    <input type="file" name="image-u" class="image-u" id="image-u">
    <input type="text" name="name-u" class="name-u" id="name-u" placeholder="Nombre imagen">
    <button type="button" class="btn-ui" onclick="upload_image()">subir</button>
    <div class="response"></div>
</div><?php }
}
