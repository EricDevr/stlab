<?php
/* Smarty version 4.3.0, created on 2023-01-28 15:29:35
  from '/storage/emulated/0/htdocs/stlab/templates/post/comments.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d5698fc36861_31929879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aef9d512f5981a462f85a3dc304bdbcfe558952' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlab/templates/post/comments.html',
      1 => 1674930573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d5698fc36861_31929879 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="comments">
<div class="fb-comments" data-href="http://stlab.com/post/<?php echo $_smarty_tpl->tpl_vars['POST']->value['id'];?>
/" data-width="100%" data-numposts="5"></div>
</section><?php }
}
