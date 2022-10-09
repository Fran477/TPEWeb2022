{{include file="header.tpl"}}

<figure class="text-center"><h1 class="display-6">Agregar un producto a la base de datos</h1></figure>

<div class='container align-items-center justify-content-center'>
{if $error != null}
    <div class="alert alert-danger" role="alert">
            {$error}
    </div>
{/if}
    <form action="addProduct" method="POST" class="my-4">
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
                    {foreach from=$categories item=$category}
                        <option value="{$category->id}">{$category->name}</option>
                    {/foreach}
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
</div>



<div class='container align-items-center justify-content-center'>
    <figure class="text-center"><h1 class="display-6">Agregar una categora</h1></figure>
    <form action="addCategory" method="POST" class="my-4">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" name="description" class="form-control" id="description">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


{include file="categoriesAdmin.tpl"}



{{include file="footer.tpl"}}
