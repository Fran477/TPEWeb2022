<?php
/* Smarty version 4.2.1, created on 2022-10-03 20:15:59
  from 'C:\xampp\htdocs\TPEWeb2022\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b26df9015f7_33929227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a122264effb2dd9b32c64fba709ba2af5c40307' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2022\\templates\\home.tpl',
      1 => 1664820956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b26df9015f7_33929227 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;
}
}
