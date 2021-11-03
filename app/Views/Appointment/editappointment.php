<div class="container">
<?php
       $session=session();
       if(!empty($session->getFlashdata('success'))){
           ?>
           <div class="alert alert-success">
               <?php echo $session->getFlashdata('success') ?>
           </div>
           <?php
       }
       if(!empty($session->getFlashdata('error'))){
           ?>
           <div class="alert alert-danger">
               <?php echo $session->getFlashdata('error') ?>
           </div>
           
           <?php
           

       }   
       ?>  
        </div> 

<div style="text-align: center;">
    <h2>update Appointment</h2>
</div>
<div class="row">
    <!-- Form For Adding Appointment -->
    <div class="container" style="display: flex;">
        <form action="" method="post">

    
               

            <div class="form-group">
                <label for="inputdepartmentname">Department Name<i class="text-danger">*</i></label>
                <select id="inputdepartmentname" name="department_name" class="form-control">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('department_name')) {

                                    echo $validation->getError('department_name');
                                }?>
                    </span>
                    <option selected>Choose...</option>
                    <?php
                        
                        foreach ($department as $department) {?>



                    <option value="<?=$department['department_name']?>"><?=$department['department_name']?>
                    </option>
                    <?php ;}?>

                </select>
            </div>
            <div class="form-group">
                <label for="doctorname">Doctor Name<i class="text-danger">*</i></label>
                <select name="doctor_id" id="doctorname" class="form-control">
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('doctor_name')) {

                                    echo $validation->getError('docote_name');
                                }?>
                    </span>
                    <option selected>Choose...</option>
                    <?php
                        
                        foreach ($doctor as $doctor) {?>



                    <option value="<?=$doctor['id']?>">
                        <?=$doctor['firstname'].' '.$doctor['lastname']?>
                    </option>
                    <?php ;}?>

                </select>
            </div>


            <div class="form-group ">
                <label for="appointmentdate">Appointment Date:<i class="text-danger">*</i></label>
                <input type="datetime-local" class="form-control" value="" id="appointmentdate" name="appointment_date">
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('appintment_date')) {

                                    echo $validation->getError('appointment_date');
                                }?>
                </span>
            </div>


 



            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>