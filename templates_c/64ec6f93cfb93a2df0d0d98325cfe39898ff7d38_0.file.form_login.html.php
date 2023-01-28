<?php
/* Smarty version 4.3.0, created on 2023-01-28 16:18:36
  from 'C:\xampp\htdocs\stlab\templates\form_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5750cc5a2a7_25290418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ec6f93cfb93a2df0d0d98325cfe39898ff7d38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\form_login.html',
      1 => 1674933326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d5750cc5a2a7_25290418 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" class="form-login">
    <h3>Iniciar sesión</h3>
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="pass" placeholder="Password">
    <button type="button" id="btn-login">login</button>
</form><?php }
}
