<?php
/* Smarty version 4.3.0, created on 2023-01-29 18:27:48
  from '/storage/emulated/0/htdocs/stlab/templates/publicar/form_upload_image.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6e4d48f0ff0_94511340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e9a8d519fe050e9ac8f34765ce69c71dfaefae5' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/publicar/form_upload_image.html',
      1 => 1675027594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d6e4d48f0ff0_94511340 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-form-u-image">
    <input type="file" name="image-u" class="image-u" id="image-u">
    <input type="text" name="name-u" class="name-u" id="name-u" placeholder="Nombre imagen">
    <button type="button" class="btn-ui" onclick="upload_image()">subir</button>
    <div class="response"></div>
</div><?php }
}
