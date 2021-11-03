<?php $session = session();
if($session->get('user_id')==$user['id']):


?>

<h1 style="text-align: center; margin:  4px;"> Update User</h1>
<div class="row">
    <!-- Form For Adding Doctor -->
    <div class="container">
        <form action="" method="post">
            <div class="form-row">
                <div class="col">
                    <label for="Firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $user['firstname']; ?>">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('firstname')) {

                                    echo $validation->getError('firstname');
                                }?>
                    </span>



                </div>
                <div class="col">
                    <label for="Firstname">Last Name</label>
                    <input type="text" name="lastname" value="<?php echo $user['lastname']; ?>" class="form-control"
                        placeholder="Last name">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('lastname')) {

                                    var_dump( $validation->getError());
                                }?>
                    </span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" value="<?php echo $user['email']; ?>" class="form-control" id="inputEmail4"
                        name="email" placeholder="Email">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('email')) {

                                    echo $validation->getError('email');
                                }?>
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password<i class="text-danger">*</i></label>
                    <input type="password" class="form-control" id="inputPassword4" name="password"
                       value="<?=$user['password']?>" placeholder="Password">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('password')) {

                                    echo $validation->getError('password');
                                }?>
                    </span>
                </div>

            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address"
                    value="<?php echo $user['address']; ?>" placeholder="1234 Main St">
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('address')) {

                                    echo $validation->getError('address');
                                }?>
                </span>
            </div>
            <div class="form-group">
                <label for="inputspecialist">Specialist</label>
                <select id="inputdepartment" class="form-control" name="specialist">

                        <option selected value="arthopedic">arthopedic</option>     
                        <option value="Cardiologist">Cardiologist</option>     
                        <option  value="ent">ENT Specialist</option>     
                        <option  value="medical">Medical Specialistt</option>     
                    </select>
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('specialist')) {

                                    echo $validation->getError('specialist');
                                }?>
                </span>
            </div>
            <div class="form-group">
                <label for="inputcareertitle">Career title</label>
                <input type="text" class="form-control" id="inputcareertitle"
                    value="<?php echo $user['career_title']; ?>" name="career_title">
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('career_title')) {

                                    echo $validation->getError('career_title');
                                }?>
                </span>
            </div>
            <div class="form-group">
                <label for="mobile">Enter a mobile number:</label>
                <input type="mobile" class="form-control" id="mobile" name="mobile_no"
                    value="<?php echo $user['mobile_no']; ?>" placeholder="0300-1234567">
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('mobile_no')) {

                                    echo $validation->getError('mobile_no');
                                }?>
                </span>
            </div>
            <div class="form-group">
                Sex: <br>
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
                <div class="form-group col-md-6">
                    <label for="inputdesignation">Designation</label>
                    <input type="text" class="form-control" id="inputdesignation"
                        value="<?php echo $user['designation']; ?>" name="designation">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('designation')) {

                                    echo $validation->getError('designation');
                                }?>
                    </span>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputdepartment">Department</label>
                    <select id="inputdepartment" class="form-control" value="<?php echo $user['department_name']; ?>"
                        name="department_name">
                        <option selected>Choose...</option>
                        <?php
                        
                        foreach ($department as $department) {?>



                        <option value="<?=$department['department_name']?>"><?=$department['department_name']?></option>
                        <?php ;}?>
                    </select>
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('department_name')) {

                                    echo $validation->getError('department_name');
                                }?>
                    </span>
                </div>
                <div class="form-group col-md-2">
                    <label for="picture">Picture</label>
                    <input type="file" id="myFile" name="filename">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="birthday">Birthday:</label>
                    <input type="date" value="<?php echo $user['birthday']; ?> class=" form-control" id="birthday"
                        name="birthday">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('birthday')) {

                                    echo $validation->getError('birthday');
                                }?>
                    </span>
                </div>
                <input type="hidden" value="2" name="user_role">
                <div class="form-group col-md-6">
                    <label for="inputbloodgroup">BloodGroup</label>
                    <select value="<?php echo $user['blood_group']; ?> id=" inputbloodgroup" name="blood_group"
                        class="form-control">
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
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('blood_group')) {

                                    echo $validation->getError('blood_group');
                                }?>
                    </span>
                </div>
            </div>
            <input type="hidden" name="user_role" value="<?=$user['user_role']?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <?php endif?>