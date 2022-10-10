{include file= 'templates/header.tpl'}
<figure class="text-center"><h1 class="display-6">Editar categoria {$category[0]->name}</h1></figure>
<div class="container justify-content-center" style="width:90%;">
    {if $error != null}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
    {/if}
    
    <form action="editCategory/{$category[0]->id}" method="POST" class="my-4">
    <input class="form-control mr-sm-2" type="hidden" name="id" value="{$category[0]->id}">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" value="{$category[0]->name}">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="description" id="name" value="{$category[0]->description}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>




<figure class="text-center"><h4 class="display-6">Categoria que se va a editar</h4></figure>
<table class="table">
<thead>
    <tr>
        <th scope="col">Categoria</th>
        <th scope="col">Descripcion</th>
    </tr>
</thead>
<tbody>
<tr>
    <td scope="row"><h6>{$category[0]->name}<h6></td>
    <td scope="row">{$category[0]->description}</td>
    </tr>
</tbody>
</table>
</div>


{include file= 'templates/footer.tpl'}