<!-- la partie couverture -->

<div class="container mt-5 mb-5">
    <div class="row pt-5">
          
            <h5 class="name col-12">News Feeds </h5>
           
            <p class="desc">Just another Blog page</p>
 
     
    </div>
</div>


<!-- la partie couverture -->






<div class="container-fluid social pt-5">
    <div class="container">
        <div class="row">

            <div class="col-8">


            <?php

                foreach($tab_u as $b){

                    $img = $b->getImage();
                    $id = $b->getId();
                    echo "
                    
                    <article class='mt-5 pt-5'>
                    <img src='assets/images/$img' alt='' class='article-img w-100'>

                    <p class='text-warning mt-1'> <i class='far fa-clock'></i>". $b->getDate()  . " </p>
                    <h4 class='text-light '>".  $b->getTitre()  . " </h4>
                    <p class='text-light lead'>
                    ". $b->getDescription()  . "

                    </p>
                    <a href='index.php?controller=blog&action=read&id=$id' class='btn btn-outline-warning'>READ MORE</a>
                </article>

                    
                    ";


                }

            ?>



       


            </div>

            <div class="col-4 mt-5 pt-5">

                <input type="text" name="" id="" class="form-control search p-4" placeholder="search" style="background:rgba(0, 0, 0, 0)">



<?php
        foreach($tab_old as $o){
            $img = $o->getImage();

                echo"

                <div class='mt-4'>

                    <div class='row'>
                        <div class='col-4'>
                            <img src='assets/images/$img' alt='' class='w-100 h-100 artside'>
                        </div>
                        <div class='col-8'>
                            <h6 class='name23'>". $o->getTitre() ."</h6>
                            <p class='text-warning mt-1'> <i class='far fa-clock'></i>".$o->getDate()."</p>
                        </div>
                    </div>





                </div>


                <hr style='background-color:#313552'>




                
                
                
                ";

        }

?>


                <div class="mt-5"></div>

              <div class="pt-5">
                <h6 class="name2 mb-3">Tag cloud</h6>


                <button class="btn btn-outline-warning px-4 m-1">Angular</button>
                <button class="btn btn-outline-warning px-4 m-1">mean</button>
                <button class="btn btn-outline-warning px-4 m-1">node</button>
                <button class="btn btn-outline-warning px-4 m-1">php</button>
                <button class="btn btn-outline-warning px-4 m-1">js</button>
                <button class="btn btn-outline-warning px-4 m-1">html</button>
                <button class="btn btn-outline-warning px-4 m-1">css</button>
                <button class="btn btn-outline-warning px-4 m-1">bootstrap</button>
                <button class="btn btn-outline-warning px-4 m-1">react</button>
                <button class="btn btn-outline-warning px-4 m-1">symfony</button>


              </div>
            </div>





        </div>

    </div>

</div>






















<!--avis client-->




<!-- avis client -->

<div class="container-fluid social" id="letschat">

        <div class="container pt-5 pb-5">
        
            <div class="row">
                <div class="col-10">
                    <p class="hello1 mt-5 ">SOCIAL MEDIA</p>
                    <p class="name1">Let's Be Friends</p>
                </div>
           
            </div>
        
        
       
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6  p-3">
                <div class="row socialcard w-100 p-3">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                            <h6 class="name2">Linkeding</h6>
                            <p class="hello2">Professional social profile</p>
                    </div>
                    <div class="col-4">
                            <i class="fab fa-linkedin-in fa-4x"></i>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-4 col-md-4 col-sm-6  p-3">
                    <div class="row socialcard w-100 p-3">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                                <h6 class="name2">Dribble</h6>
                                <p class="hello2">Design work social profile</p>
                        </div>
                        <div class="col-4">
                                <i class="fas fa-basketball-ball fa-4x"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6  p-3">
                        <div class="row socialcard w-100 p-3">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6 class="name2">Instagram</h6>
                                    <p class="hello2">social communication</p>
                            </div>
                            <div class="col-4">
                                    <i class="fab fa-instagram fa-4x"></i>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-6  p-3">
                            <div class="row socialcard w-100 p-3">
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h6 class="name2">Twitter</h6>
                                        <p class="hello2">Random thoughts</p>
                                </div>
                                <div class="col-4">
                                        <i class="fab fa-twitter fa-4x"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6  p-3">
                                <div class="row socialcard w-100 p-3">
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                            <h6 class="name2">Youtube</h6>
                                            <p class="hello2">Work case study</p>
                                    </div>
                                    <div class="col-4">
                                            <i class="fab fa-youtube fa-4x"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6  p-3">
                                    <div class="row socialcard w-100 p-3">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                <h6 class="name2">Email</h6>
                                                <p class="hello2">aminejbali32@gmail.com</p>
                                        </div>
                                        <div class="col-4">
                                                <i class="far fa-envelope fa-4x"></i>       
                                        </div>
                                    </div>
                                </div>
        </div>
        
        
        </div>
            
        </div>
        
        
        
        
        <!--avis client-->
        


