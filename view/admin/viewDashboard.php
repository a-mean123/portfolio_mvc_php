<div class="container admin bg-light">

<h1 class="mt-4 text-info">Dashboard:</h1>

    <div class="row mt-5">
    
        <div class="col-3">
        <div class="card text-white bg-info mb-3 text-center"  style="max-width: 18rem;">
            <div class="card-header">Contact</div>
            <div class="card-body">
            <h5 class="card-title">la somme des articles</h5>
            <p class="card-text"><?php  echo count($tab_c)  ?></p>
  </div>
</div>
        </div>


        <div class="col-3">
        <div class="card text-white bg-info mb-3 text-center"  style="max-width: 18rem;">
            <div class="card-header">Projet</div>
            <div class="card-body">
            <h5 class="card-title">la somme des Projets</h5>
            <p class="card-text"><?php  echo count($tab_p)  ?></p>
  </div>
</div>
        </div>


        
        <div class="col-3">
        <div class="card text-white bg-info mb-3 text-center"  style="max-width: 18rem;">
            <div class="card-header">Testimonials</div>
            <div class="card-body">
            <h5 class="card-title">la somme des Testimonials</h5>
            <p class="card-text"><?php  echo count($tab_t)  ?></p>
  </div>
</div>
        </div>
    
    </div>


</div>