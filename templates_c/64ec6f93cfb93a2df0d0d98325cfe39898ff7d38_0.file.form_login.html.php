<?php
/* Smarty version 4.3.0, created on 2023-01-27 23:44:25
  from 'C:\xampp\htdocs\stlab\templates\form_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d453c9552339_38402788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ec6f93cfb93a2df0d0d98325cfe39898ff7d38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\form_login.html',
      1 => 1674859463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d453c9552339_38402788 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" class="form-login">
    <h3>Iniciar sesión</h3>
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="pass" placeholder="Password">
    <button>login</button>
</form><?php }
}
