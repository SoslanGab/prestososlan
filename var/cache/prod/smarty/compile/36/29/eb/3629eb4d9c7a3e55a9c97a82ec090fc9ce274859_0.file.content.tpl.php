<?php
/* Smarty version 4.3.1, created on 2023-11-14 16:26:49
  from '/home/soslan/webapps/prestasoslan/admin723orcgrb4zr1psb2mf/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655391b9c794e5_93512008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3629eb4d9c7a3e55a9c97a82ec090fc9ce274859' => 
    array (
      0 => '/home/soslan/webapps/prestasoslan/admin723orcgrb4zr1psb2mf/themes/default/template/content.tpl',
      1 => 1699965801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655391b9c794e5_93512008 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
