<div class="container admin bg-light">


    <div class="row mt-4">
    
    <div class="col-9">
        <h1 class="mt-4 text-info">Gestion des testimonials:</h1>
    
    </div>

    <div class="col-3">
        <a href="index.php?controller=admin&action=createtestimonial" class="btn btn-success text-light mt-4">Ajouter</a>
    </div>
    </div>

    <div class="row mt-5 mb-4">
    


    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mestier</th>
      <th scope="col">Message</th>
     
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_t as $c){
        $id = $c->getId();
        echo "<tr>";
        echo "<td>".$c->getId()."</td>"; 

        echo "<td>".$c->getName()."</td>"; 
        echo "<td>".$c->getMetier()."</td>"; 
        echo "<td>".$c->getMessage()."</td>"; 
      
       
        echo "<td> <a class='btn btn-outline-danger' href='index.php?controller=testimonial&action=delete&id=$id'> Supprimer </a> </td>";


        echo "</tr>";

    }

    ?>




  </tbody>
</table>
 
    </div>



</div>



