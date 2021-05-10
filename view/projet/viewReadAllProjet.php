

<!-- la partie couverture -->



<!--la partie projects-->


<div class="container mt-5">

        <h6 class="hello">MY CLIENT</h6>
        <h4 class="name">Projects</h4>


        <div class="row mt-5">


<?php

    foreach($tab_p as $p){

        $img = $p->getImage();
        $l = $p->getLien();

        echo"
    
    
    
        <div class='col-lg-3 col-md-4 col-sm-6 mt-5'>


        <div class='cardd'>

            <img src='assets/images/$img' alt='' class='card-img h-25'>
            
            <h5 class='m-4 text-light card-t'>".$p->getTitre()."</h5>
            <p class='m-4 text-light'>".$p->getDescription()."</p>
            <a href='' class='btn btn-outline-warning m-4'>visiter le site</a>
        </div>




    </div>

    
    
    
    
        ";
    }



?>



     
                            
                            
                                                                                                                



        </div>

</div>


<!--la partie projects-->
