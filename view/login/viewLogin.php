<div class="py-5">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <span class="anchor" id="formLogin"></span>

      <!-- form card login -->
      <div class="card rounded-0">
        <div class="card-header">
          <h3 class="mb-0">Login</h3>
        </div>
        <div class="card-body">
          <form class="form" method="POST" action="index.php?controller=login&action=created">
            <div class="form-group">
              <label for="uname1">Username</label>
              <input type="text" class="form-control rounded-0"  name="username" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control rounded-0"  name="password" required>
            </div>
            <button type="submit"  class="btn btn-success float-right">Login</button>
          </form>
        </div>
        <!--/card-block-->
      </div>
      <!-- /form card login -->

    </div>


  </div>
</div>