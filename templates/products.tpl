
<div class='container row row-cols-auto align-items-center justify-content-center'>
{foreach from=$products item=$product}
<div class='card col' style='width: 18rem;'>
        <img src='{$product->img}' class='card-img-top img-thumbnail img-fluid' alt='...'>
        <div class='card-body'>
              <h5 class='card-title'>{$product->name}</h5>
              <p class='card-text'>{$product->description}</p>
              <p class='card-text'>{$product->price}</p>
              <a href='detalles/{$product->id}' class='btn btn-primary'>ver mas</a>
        </div>
</div>
{/foreach}
<div class="w-100 d-none d-md-block"></div>
</div>