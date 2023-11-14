<?php
/* Smarty version 4.3.1, created on 2023-11-14 13:51:28
  from '/home/soslan/webapps/prestasoslan/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65536d50a034d4_04336580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0853076be8c94968a8ac4f16db977aa5b5a76a6' => 
    array (
      0 => '/home/soslan/webapps/prestasoslan/themes/classic/templates/_partials/helpers.tpl',
      1 => 1699965803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65536d50a034d4_04336580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/soslan/webapps/prestasoslan/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/f0/85/30/f0853076be8c94968a8ac4f16db977aa5b5a76a6_2.file.helpers.tpl.php',
    'uid' => 'f0853076be8c94968a8ac4f16db977aa5b5a76a6',
    'call_name' => 'smarty_template_function_renderLogo_132838958265536d509fbab3_92226975',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_132838958265536d509fbab3_92226975 */
if (!function_exists('smarty_template_function_renderLogo_132838958265536d509fbab3_92226975')) {
function smarty_template_function_renderLogo_132838958265536d509fbab3_92226975(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_132838958265536d509fbab3_92226975 */
}
