<h1 style="text-align: center; margin:  4px;"> Add Department</h1>
  <div class="row">


      <!-- Form For  creatig Deparment -->
      <div class="container">
          <form action="createdepartment" method="post">
              <div class="form-row">
                  <div class="col">
                      <label for="department_name">Department Name</label>
                      <input type="text" name="department_name" class="form-control" required
                          placeholder="department name">
                  </div>

              </div>

              <div class="form-group">
                  <label for="department_description">Department decription</label>
                  <input type="text" class="form-control" required id="department_description" value=""
                      name="department_description" placeholder="department description">
              </div>
              <button type="submit" class="btn btn-primary">add</button>
          </form>
      </div>