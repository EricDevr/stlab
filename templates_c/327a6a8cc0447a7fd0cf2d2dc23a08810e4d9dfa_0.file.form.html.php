<?php
/* Smarty version 4.3.0, created on 2023-01-29 18:27:48
  from '/storage/emulated/0/htdocs/stlab/templates/publicar/form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d6e4d489e5b5_27040997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '327a6a8cc0447a7fd0cf2d2dc23a08810e4d9dfa' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/publicar/form.html',
      1 => 1675027594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publicar/form_upload_image.html' => 1,
  ),
),false)) {
function content_63d6e4d489e5b5_27040997 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" enctype="multipart/form-data" class="form-publicar">
    <select name="category">
        <option value="Internet">Internet</option>
        <option value="Tecnología">Tecnología</option>
        <option value="Entretenimiento">Entretenimiento</option>
    </select>
    <input type="file" name="image">
    <input type="title" name="title" placeholder="Titulo">
    <div>
        <span class="bbcode">
            <a class="btn" href="javascript:bbcode('b')"><b>b</b></a>
            <a class="btn" href="javascript:bbcode('i')"><i>i</i></a>
            <a class="btn" href="javascript:bbcode('u')"><u>u</u></a>
            <a class="btn" href="javascript:bbcode('h2')">T</a>
            <div class="btn-upload-image">
                <a class="btn" href="javascript:form_upload_image()">img</a>
                <?php $_smarty_tpl->_subTemplateRender("file:publicar/form_upload_image.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </span>
        <textarea class="content" name="content" placeholder="Contenido"></textarea>
    </div>
    <button type="button" id="btn-publicar">publicar</button>
</form><?php }
}
