<?php
    class productView{
        
        function showHome($products){
            include './templates/header.php';
           
            echo "<div class='container row row-cols-auto align-items-center justify-content-center'>";
            foreach($products as $product){
                echo "<div class='card col' style='width: 18rem;'>
                <img src='$product->img' class='card-img-top img-thumbnail img-fluid' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>$product->name</h5>
                  <p class='card-text'>$product->description</p>
                  <p class='card-text'>$$product->price</p>
                  <a href='#' class='btn btn-primary'>ver mas</a>
                </div>
                </div>";
            }
            echo'"<div class="w-100 d-none d-md-block"></div>"';
            echo "</div>";
           
            
            include './templates/footer.php';
        }
    }