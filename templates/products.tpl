<figure class="text-center"><h1 class="display-6">Productos baratos</h1></figure>
<div class='container row row-cols-auto justify-content-center'>
{foreach from=$products item=$product}
      {{if $product->price<2000}}
            <div class='card col' style='width: 18rem; margin:5px;'>
            <img src='{$product->img}' class='card-img-top img-thumbnail img-fluid' alt='...'>
            <div class='card-body'>
                  <h5 class='card-title'>{$product->name}</h5>
                  <p class='card-text'>Precio: ${$product->price}</p>
                  <a href='detalles/{$product->id}' class='btn btn-primary'>ver mas</a>
            </div>
    </div> 
{/if}
{/foreach}
<div class="w-100 d-none d-md-block"></div>
</div>

<figure class="text-center"><h1 class="display-6">Todos los productos</h1></figure>
<div class='container row row-cols-auto justify-content-center'>
{foreach from=$products item=$product}
            <div class='card col' style='width: 15rem; margin:5px;'>
            <img src='{$product->img}' class='card-img-top img-thumbnail img-fluid' alt='...'>
            <div class='card-body'>
                  <h5 class='card-title'>{$product->name}</h5>
                  <p class='card-text'>Precio: ${$product->price}</p>
                  <a href='detalles/{$product->id}' class='btn btn-primary'>ver mas</a>
            </div>
    </div> 
{/foreach}
<div class="w-100 d-none d-md-block"></div>
</div>