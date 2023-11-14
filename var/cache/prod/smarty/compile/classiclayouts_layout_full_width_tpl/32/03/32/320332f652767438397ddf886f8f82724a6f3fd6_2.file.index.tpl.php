<?php
/* Smarty version 4.3.1, created on 2023-11-14 13:51:28
  from '/home/soslan/webapps/prestasoslan/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65536d509c4718_43778654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '320332f652767438397ddf886f8f82724a6f3fd6' => 
    array (
      0 => '/home/soslan/webapps/prestasoslan/themes/classic/templates/index.tpl',
      1 => 1699965803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65536d509c4718_43778654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209436501465536d509c19f6_74042961', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_143494452865536d509c2224_49931235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_70593429265536d509c31c8_36884514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_145345113965536d509c2db0_97470485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70593429265536d509c31c8_36884514', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_209436501465536d509c19f6_74042961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_209436501465536d509c19f6_74042961',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_143494452865536d509c2224_49931235',
  ),
  'page_content' => 
  array (
    0 => 'Block_145345113965536d509c2db0_97470485',
  ),
  'hook_home' => 
  array (
    0 => 'Block_70593429265536d509c31c8_36884514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143494452865536d509c2224_49931235', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145345113965536d509c2db0_97470485', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
