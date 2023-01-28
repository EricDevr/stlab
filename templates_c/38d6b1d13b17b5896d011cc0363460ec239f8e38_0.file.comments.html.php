<?php
/* Smarty version 4.3.0, created on 2023-01-28 16:23:20
  from 'C:\xampp\htdocs\stlab\templates\post\comments.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d57628a75fd4_62893305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38d6b1d13b17b5896d011cc0363460ec239f8e38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlab\\templates\\post\\comments.html',
      1 => 1674933326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d57628a75fd4_62893305 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="comments">
<div class="fb-comments" data-href="http://stlab.com/post/<?php echo $_smarty_tpl->tpl_vars['POST']->value['id'];?>
/" data-width="100%" data-numposts="5"></div>
</section><?php }
}
