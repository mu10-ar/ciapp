  <div class="row">


      <!-- Form For Adding Doctor -->
      <div class="container">
          <form action="" method="post">
              <div class="form-row">
                  <div class="col">
                      <label for="Firstname">First Name</label>
                      <input type="text" name="firstname" class="form-control" value="<?=$user['firstname'] ?>"
                          placeholder="First name">
                  </div>
                  <div class="col">
                      <label for="Firstname">Last Name</label>
                      <input type="text" name="lastname" class="form-control" value="<?=$user['lastname'] ?>"
                          placeholder="Last name">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" value="<?php echo $user['email']; ?>" id="inputEmail4"
                          name="email" placeholder="Email">
                  </div>

              </div>
              <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" value="<?php echo $user['address']; ?>"
                      name="address" placeholder="1234 Main St">
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
          </form>
      </div>