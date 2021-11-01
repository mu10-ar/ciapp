<div style="text-align: center; margin:  4px;">
    <h2 class="my-4">update Pateint</h2>
</div>
<div class="row">
    <!-- Form For Adding Nurse -->
    <div class="container">
        <form action="" method="post">
            <div class="form-row">
                <div class="col">
                    <label for="Firstname">First Name<i class="text-danger">*</i></label>
                    <input type="text" name="firstname" class="form-control" placeholder="First name"
                        value="<?=$user['firstname']?>">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('firstname,')) {

                                    echo $validation->getError('firstname');
                                }?>
                    </span>
                </div>
                <div class="col">
                    <label for="Firstname">Last Name<i class="text-danger">*</i></label>
                    <input type="text" name="lastname" class="form-control" placeholder="Last name"
                        value="<?=$user['lastname']?>">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('lastname')) {

                                    echo $validation->getError('lastname');
                                }?>
                    </span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email<i class="text-danger">*</i></label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email"
                        value="<?=$user['email']?>">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('email')) {

                                    echo $validation->getError('email');
                                }?>
                    </span>
                </div>

            </div>
            <div class="form-group">
                <label for="inputAddress">Address<i class="text-danger">*</i></label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St"
                    value="<?=$user['address']?>">
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('address')) {

                                    echo $validation->getError('address');
                                }?>
                </span>
            </div>

            <div class="form-group">
                <label for="mobile">Enter a mobile number:<i class="text-danger">*</i></label>
                <input type="mobile" class="form-control" id="mobile" name="mobile_no" placeholder="0300-1234567"
                    value="<?=$user['mobile_no']?>">
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('mobile_no')) {

                                    echo $validation->getError('mobile_no');
                                }?>
                </span>
            </div>
            <div class="form-group">
                Sex:<i class="text-danger">*</i> <br>
                <input type="radio" checked name="sex" value="male"> Male<br>
                <input type="radio" name="sex" value="female"> Female<br>
                <input type="radio" name="sex" value="other"> Other.
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('sex')) {

                                    echo $validation->getError('sex');
                                }?>
                </span>
            </div>

            <div class="form-row">
                <!-- <div class="form-group col-md-6">
                      <label for="inputdesignation">Designation</label>
                      <input type="text" class="form-control" id="inputdesignation">
                  </div> -->
                <div class="form-group col-md-4">
                    <label for="inputdepartment">Department<i class="text-danger">*</i></label>
                    <select id="inputdepartment" class="form-control" name="department_name"
                        value="<?=$user['department_name']?>">
                        <span class="red">
                            <?php 
                                if (isset($validation)&& $validation->hasError('department_name')) {

                                    echo $validation->getError('department_name');
                                }?>
                        </span>
                        <option selected>Choose...</option>
                        <?php
                        
                        foreach ($department as $department) {?>



                        <option value="<?=$department['department_name']?>"><?=$department['department_name']?></option>
                        <?php ;}?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="picture">Picture</label>
                    <input type="file" id="myFile" name="filename">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('filename')) {

                                    echo $validation->getError('filename');
                                }?>
                    </span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="birthday">Birthday:<i class="text-danger">*</i></label>
                    <input type="date" class="form-control" id="birthday" name="birthday"
                        value="<?=$user['birthday']?>">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('birthday')) {

                                    echo $validation->getError('birthday');
                                }?>
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputbloodgroup">BloodGroup<i class="text-danger">*</i></label>
                    <select id="inputbloodgroup" name="blood_group" class="form-control" value="<?=$user['birthday']?>">
                        <span class="red">
                            <?php 
                                if (isset($validation)&& $validation->hasError('blood_group')) {

                                    echo $validation->getError('blood_group');
                                }?>
                        </span>
                        <option selected>Choose...</option>
                        <option value="a+">A+</option>
                        <option value="a-">A-</option>
                        <option value="b+">B+</option>
                        <option value="b-">B-</option>
                        <option value="ab+">AB+</option>
                        <option value="ab-">AB-</option>
                        <option value="o+">O+</option>
                        <option value="o-">O-</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="user_role" value="4">



            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>