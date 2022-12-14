{include file= 'templates/header.tpl'}

<div class="container justify-content-center" style="width:90%;">
<div class='container row row-cols-auto justify-content-center'>
   <figure class="text-center"><h1 class="display-6">Categorias</h1></figure>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Ver</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$categories item=$category}
        <tr>
        <td scope="row"><h6>{$category->name}<h6></td>
        <td scope="row">Descripcion de la categoria:{$category->description}</td>
        <td><a class="navbar-brand" href="categoria/{$category->id}"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path></svg>
                {$category->name}
              </button></a><td>
        </tr>
    {/foreach}
    </tbody>
</table>
</div>
</div>

{include file= 'templates/footer.tpl'}