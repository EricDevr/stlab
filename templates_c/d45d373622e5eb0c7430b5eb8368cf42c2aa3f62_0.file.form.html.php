<?php
/* Smarty version 4.3.0, created on 2023-01-28 16:21:19
  from 'C:\xampp\htdocs\stlab\templates\publicar\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d575aff37733_27889962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd45d373622e5eb0c7430b5eb8368cf42c2aa3f62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\publicar\\form.html',
      1 => 1674933326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d575aff37733_27889962 (Smarty_Internal_Template $_smarty_tpl) {
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
