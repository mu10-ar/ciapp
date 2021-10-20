<div style="text-align: center; margin-bottom:  6px; color:brown">
    <h2>Nurse Form </h2>
</div>
<div class="row">
    <!-- Form For Adding Nurse -->
    <div class="container">
        <form action="" method="post">
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
                    <input type="password" class="form-control" id="inputPassword4" name="password"
                        placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
            </div>
            <!-- <div class="form-group">
                <label for="inputspecialist">Specialist</label>
                <input type="text" class="form-control" id="inputspeaclist" name="Specialist" placeholder="ENT(asddf)">
            </div>

            <div class="form-group">
                <label for="inputcareertitle">Career title</label>
                <input type="text" class="form-control" id="inputcareertitle" name="CareerTitle">
            </div> -->
            <div class="form-group">
                <label for="mobile">Enter a mobile number:</label>
                <input type="mobile" class="form-control" id="mobile" name="mobile_no" placeholder="0300-1234567"
                    pattern="[0-9]{4}-[0-9]{7}">
            </div>
            <div class="form-group">
                Sex: <br>
                <input type="radio" checked name="sex" value="male"> Male<br>
                <input type="radio" name="sex" value="female"> Female<br>
                <input type="radio" name="sex" value="other"> Other.
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
                        <option>D3</option>
                        <option>D2</option>
                        <option>D1</option>
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
                    <select id="inputbloodgroup" class="form-control" name="blood_group">
                        <option selected>Choose...</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="o">o</option>
                    </select>
                </div>
            </div>

            <input type="hidden" name="user_role" value="3">

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>