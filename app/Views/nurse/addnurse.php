
<div style="text-align: center;">
    <h2><u>Nurse Form </u></h2>
</div>
<div class="row">
      <!-- Form For Adding Nurse -->
      <div class="container">
          <form action="createdoctor" method="post">
              <div class="form-row">
                  <div class="col">
                      <label for="Firstname">First Name</label>
                      <input type="text" name="firstname" class="form-control" placeholder="First name">
                  </div>
                  <div class="col">
                      <label for="Firstname">Last Name</label>
                      <input type="text" name="lastname" class="form-control" placeholder="Last name">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                  <label for="inputspecialist">Specialist</label>
                  <input type="text" class="form-control" id="inputspeaclist" name="Specialist" placeholder="ENT(asddf)">
              </div>

              <div class="form-group">
                  <label for="inputcareertitle">Career title</label>
                  <input type="text" class="form-control" id="inputcareertitle" name="CareerTitle">
              </div>
              <div class="form-group">
                  <label for="mobile">Enter a mobile number:</label>
                  <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="0300-1234567" pattern="[0-9]{4}-[0-9]{7}">
              </div>
              <div class="form-group">
                  Sex: <br>
              <input type="radio" name="gender" value="male"> Male<br>
              <input type="radio" name="gender" value="female"> Female<br>
              <input type="radio" name="gender" value="other"> Other.
              </div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputdesignation">Designation</label>
                      <input type="text" class="form-control" id="inputdesignation">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputdepartment">Department</label>
                      <select id="inputdepartment" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                      </select>
                  </div>
                  <div class="form-group col-md-2">
                      <label for="picture">Picture</label>
                      <input type="file" id="myFile" name="filename">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="birthday">Birthday:</label>
                      <input type="date" class="form-control" id="birthday" name="birthday">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputbloodgroup">BloodGroup</label>
                      <select id="inputbloodgroup" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                      </select>
                  </div>
              </div>
             
              <!-- <label for="edu">Education</label>
              <div class="form-group">
                  <textarea name="edu" class="form-contorl" rows="10" cols="30"> </textarea>
              </div> -->
              <!-- <div class="form-group">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                          Check me out
                      </label>
                  </div>
              </div> -->

              <button type="submit" class="btn btn-primary">Add</button>
          </form>
      </div>