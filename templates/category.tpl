{{include file="header.tpl"}}
<div class="container justify-content-center" style="width:90%;">
<figure class="text-center"><h1 class="display-6">{$category[0]->name}</h1></figure>
<ul class="list-group list-group-flush">
    {foreach from=$productsByCategory item=$product}
            
    <li class="list-group-item">Nombre: {$product->name}</li>
    <li class="list-group-item">Descripcion: {$product->description}</li>
    <li class="list-group-item">Stock: {$product->stock}</li>
    <li class="list-group-item">Precio: ${$product->price}</li>
    <li class="list-group-item">Tipo de filamento: {$product->type_filament}</li>
    <li class="list-group-item"><img  width=25% src={$product->img}></li>
       
    {/foreach}
</ul>
</div>


{{include file="footer.tpl"}}