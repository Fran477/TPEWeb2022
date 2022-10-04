<?php
/* Smarty version 4.2.1, created on 2022-10-04 18:31:08
  from 'C:\xampp\htdocs\TPEWeb2022\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c5fccbb9457_55358204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0205293c921159b057ea4b6b12ab9b1957379533' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2022\\templates\\products.tpl',
      1 => 1664897179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633c5fccbb9457_55358204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='container row row-cols-auto align-items-center justify-content-center'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
<div class='card col' style='width: 18rem;'>
        <img src='<?php echo $_smarty_tpl->tpl_vars['product']->value->img;?>
' class='card-img-top img-thumbnail img-fluid' alt='...'>
        <div class='card-body'>
              <h5 class='card-title'><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h5>
              <p class='card-text'>Precio: $<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
              <a href='detalles/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
' class='btn btn-primary'>ver mas</a>
        </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="w-100 d-none d-md-block"></div>
</div><?php }
}
