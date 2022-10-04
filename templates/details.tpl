

<figure class="text-center"><h1 class="display-6">Detalles del producto seleccionado</h1></figure>
    <div class="div-editar">
    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">Nombre: {$productDetail[0]->name}</li>
        <li class="list-group-item text-center">Descripcion: {$productDetail[0]->description}</li>
        <li class="list-group-item text-center">Tipo de Filamento: {$productDetail[0]->type_filament}</li>
        <li class="list-group-item text-center">Stock disponible: {$productDetail[0]->stock}</li>
        <li class="list-group-item text-center">Precio: ${$productDetail[0]->price}</li>
        <li class="list-group-item text-center"><img class="img-thumbnail" src={$productDetail[0]->img}></li>  
    </ul>
<div>

{{include file="footer.tpl"}}