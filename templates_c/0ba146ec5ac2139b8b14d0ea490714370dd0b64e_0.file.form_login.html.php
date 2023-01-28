<?php
/* Smarty version 4.3.0, created on 2023-01-28 00:35:55
  from '/storage/emulated/0/htdocs/stlab/templates/form_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d45fdbe8a7d9_37613036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ba146ec5ac2139b8b14d0ea490714370dd0b64e' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/form_login.html',
      1 => 1674861589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d45fdbe8a7d9_37613036 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" class="form-login">
    <h3>Iniciar sesión</h3>
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="pass" placeholder="Password">
    <button type="button" id="btn-login">login</button>
</form><?php }
}
