<div class="container p-2 my-5  bg-light">

<form method="POST" class="mt-4 p-5" action="index.php?controller=testimonial&action=created" >
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Metier</label>
    <input type="text" name="metier"  class="form-control" id="exampleInputPassword1">
  </div>


  <div class="form-group">
    <label for="exampleInputLien">Message</label>
    <input type="text" name="message"  class="form-control" id="exampleInputLien">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>