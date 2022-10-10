{include file= 'templates/header.tpl'}
<figure class="text-center"><h1 class="display-6">Producto a editar: {$product[0]->name}</h1></figure>

<div class='container align-items-center justify-content-center'>
{if $error != null}
    <div class="alert alert-danger" role="alert">
            {$error}
    </div>
{/if}
    <form action="editProduct/{$product[0]->id}" method="POST" enctype="multipart/form-data" class="my-4">
        <div class="row">
            <div class="col-9">
            <input class="form-control mr-sm-2" type="hidden" name="id" value="{$product[0]->id}">
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="name" type="text" class="form-control" value="{$product[0]->name}">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input name="price" type="text" class="form-control" value="{$product[0]->price}">
                </div>
                <div class="form-group">
                    <label>Tipo de Filamento</label>
                    <input name="type_filament" type="text" class="form-control" value="{$product[0]->type_filament}">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Stock</label>
                    <input name="stock" type="text" class="form-control"  value="{$product[0]->stock}">
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input name="img" type="text" class="form-control" value="{$product[0]->img}">
                </div>
                <div class="form-group"> 
                    <label>Categoria</label>
                    <select name="id_category" class="form-control btn-danger">
                    {foreach from=$categories item=$category}
                        <option value="{$category->id}">{$category->name}</option>
                    {/foreach}
                    </select>

                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Descripcion</label>
            <input name="description" type="text" class="form-control"  value="{$product[0]->description}">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>
</div>


<figure class="text-center"><h1 class="display-6">Detalles del producto seleccionado</h1></figure>
    <div class="div-editar">
    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">Nombre: {$product[0]->name}</li>
        <li class="list-group-item text-center">Descripcion: {$product[0]->description}</li>
        <li class="list-group-item text-center">Tipo de Filamento: {$product[0]->type_filament}</li>
        <li class="list-group-item text-center">Stock disponible: {$product[0]->stock}</li>
        <li class="list-group-item text-center">Precio: ${$product[0]->price}</li>
        <li class="list-group-item text-center"><img class="img-thumbnail" width=40% src={$product[0]->img}></li>  
    </ul>
<div>

{include file= 'templates/footer.tpl'}