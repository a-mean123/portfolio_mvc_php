<!-- la partie couverture -->

<div class="container mt-5 mb-4">
    <div class="row pt-5">
          
            <h5 class="name col-12"><?php echo $u->getTitre();  ?></h5>
          
     
    </div>
</div>


<!-- la partie couverture -->






<div class="container-fluid social pt-5">
    <div class="container">
        <div class="row">

            <div class="col-12">


            <?php

               

                    $img = $u->getImage();

                    echo "
                    
                    <article class='mt-5 pt-5'>
                    <img src='assets/images/$img' alt='' class='article-img w-100 h-75'>

                    <p class='text-warning mt-1'> <i class='far fa-clock'></i>". $u->getDate()  . " </p>
                    <h4 class='text-light '>".  $u->getTitre()  . " </h4>
                    <p class='text-light lead'>
                    ". $u->getDescription()  . "

                    </p>
                   
                </article>

                    
                    ";


              

            ?>



       


            </div>

    





        </div>

    </div>

</div>



















