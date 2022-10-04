<?php
/* Smarty version 4.2.1, created on 2022-10-04 18:14:51
  from 'C:\xampp\htdocs\TPEWeb2022\templates\formAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c5bfbadc310_80915361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd51fd97b92a43d47cacdb853f06565e6ef348c60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2022\\templates\\formAdd.tpl',
      1 => 1664900072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633c5bfbadc310_80915361 (Smarty_Internal_Template $_smarty_tpl) {
?>
<figure class="text-center"><h1 class="display-6">Agregar un producto a la base de datos</h1></figure>

<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input name="price" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Tipo de Filamento</label>
                <input name="type_filament" type="text" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Stock</label>
                <input name="stock" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Imagen</label>
                <input name="img" type="text" class="form-control">
            </div>
            <div class="form-group"> 
                <label>Categoria</label>
                <select name="id_category" class="form-control btn-danger">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>

            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<?php }
}
