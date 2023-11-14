<?php
/* Smarty version 4.3.1, created on 2023-11-14 13:51:28
  from '/home/soslan/webapps/prestasoslan/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65536d507922c4_25826021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e5a3db36437a20babb9d03ef38babf99cf91a5a' => 
    array (
      0 => '/home/soslan/webapps/prestasoslan/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1699965803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65536d507922c4_25826021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '84890875265536d5078e4e5_45870199';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85280170865536d5078f747_81538180', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_85280170865536d5078f747_81538180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_85280170865536d5078f747_81538180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
