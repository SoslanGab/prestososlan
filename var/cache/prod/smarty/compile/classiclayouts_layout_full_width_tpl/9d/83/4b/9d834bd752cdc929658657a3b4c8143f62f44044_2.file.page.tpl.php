<?php
/* Smarty version 4.3.1, created on 2023-11-14 13:51:28
  from '/home/soslan/webapps/prestasoslan/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65536d509d1de0_08217157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d834bd752cdc929658657a3b4c8143f62f44044' => 
    array (
      0 => '/home/soslan/webapps/prestasoslan/themes/classic/templates/page.tpl',
      1 => 1699965803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65536d509d1de0_08217157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120728772765536d509cbf45_41349630', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_193441316165536d509ccc61_31333925 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_108388925365536d509cc452_34512726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193441316165536d509ccc61_31333925', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_107451345365536d509cfb28_55549695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_138065490565536d509d0162_38714166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_123091779465536d509cf6b4_02593799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107451345365536d509cfb28_55549695', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138065490565536d509d0162_38714166', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_79056425965536d509d1286_74353754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_123364167865536d509d0e87_16029232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79056425965536d509d1286_74353754', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_120728772765536d509cbf45_41349630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_120728772765536d509cbf45_41349630',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_108388925365536d509cc452_34512726',
  ),
  'page_title' => 
  array (
    0 => 'Block_193441316165536d509ccc61_31333925',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_123091779465536d509cf6b4_02593799',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_107451345365536d509cfb28_55549695',
  ),
  'page_content' => 
  array (
    0 => 'Block_138065490565536d509d0162_38714166',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_123364167865536d509d0e87_16029232',
  ),
  'page_footer' => 
  array (
    0 => 'Block_79056425965536d509d1286_74353754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108388925365536d509cc452_34512726', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123091779465536d509cf6b4_02593799', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123364167865536d509d0e87_16029232', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
