<h1 style="text-align: center; margin:  4px;">Update Department </h1>
  <div class="row">


      <!-- Form For  creatig Deparment -->
      <div class="container">
          <form action="" method="post">
              <div class="form-row">
                  <div class="col">
                      <label for="department_name">Department Name</label>
                      <input type="text" name="department_name" class="form-control" required
                          placeholder="department name" value="<?= $department['department_name']?>">
                  </div>

              </div>

              <div class="form-group">
                  <label for="department_description">Department decription</label>
                  <input type="text" class="form-control" required id="department_description"
                      value="<?= $department['department_description']?>" name="department_description"
                      placeholder="department description">
                      <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('department_description')) {

                                    echo $validation->getError('paid');
                                }?>
                    </span>
              </div>
              <button type="submit" class="btn btn-primary">update</button>
          </form>
      </div>