<?php
/* Smarty version 4.2.1, created on 2022-10-03 20:16:06
  from 'C:\xampp\htdocs\TPEWeb2022\templates\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b26e6816b19_24620190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13a2ec5eb2d2002a3f045e59783a6bb95c6e172b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2022\\templates\\details.tpl',
      1 => 1664820937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b26e6816b19_24620190 (Smarty_Internal_Template $_smarty_tpl) {
?>

<figure class="text-center"><h1 class="display-6">Detalles del producto seleccionado</h1></figure>
    <div class="div-editar">
    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">Nombre: <?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->name;?>
</li>
        <li class="list-group-item text-center">Descripcion: <?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->description;?>
</li>
        <li class="list-group-item text-center">Stock disponible: <?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->stock;?>
</li>
        <li class="list-group-item text-center">Precio: $<?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->price;?>
</li>
        <li class="list-group-item text-center"><img class="img-producto" src=<?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->img;?>
></li>  
    </ul>
<div>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
