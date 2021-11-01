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
    <h2 class="my-4">Add Appointment</h2>
</div>
<div class="row">
    <!-- Form For Adding Appointment -->
    <div class="container" style="display: flex; justify-content:center">
        <form action="" method="post">

            <div class="form-group">
                <?php
            $session=session(); if($session->get('user_role'!=4)):?>
                <label for="patientname">Patient Name<i class="text-danger">*</i></label>
                <select id="patientname" name="patient_id" class="form-control">
                    <option selected>Choose...</option>
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('patient_id')) {

                                    echo $validation->getError('patient_id');
                                }?>
                    </span>
                    <?php
                        
                        foreach ($patient as $patient) {?>



                    <option value="<?=$patient['id']?>"><?=$patient['firstname'].' '.$patient['lastname']?>
                    </option>
                    <?php ;} 
                    endif;?>


                </select>
            </div>

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
                                if (isset($validation)&& $validation->hasError('doctor_id')) {

                                    echo $validation->getError('docote_id');
                                }?>
                    </span>
                    <option selected>Choose...</option>
                    <?php
                        
                        foreach ($doctor as $doctor) {?>




                    <option value=" <?=$doctor['id']?>">
                        <?=$doctor['firstname'].' '.$doctor['lastname']?>
                    </option>
                    <?php ;}?>

                </select>
            </div>


            <div class="form-group ">
                <label for="appointmentdate">Appointment Date:<i class="text-danger">*</i></label>
                <input type="datetime-local" class="form-control" id="appointmentdate" name="appointment_date">
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('appointment_date')) {

                                    echo $validation->getError('appointment_date');
                                }?>
                </span>
            </div>


            <div class="form-group">
                <div class="form-group">
                    <label for="problem">Problem<i class="text-danger">*</i></label>
                    <input type="text" name="problem" class="form-control" placeholder="Problems Here!">
                    <span class="red">
                        <?php $session =session();
                                if (isset($validation)&& $validation->hasError('problem')) {

                                    echo $validation->getError('problem');
                                }?>
                    </span>
                </div>
            </div>
            <input type="hidden" name="status" value="0">

            
            <input type="hidden" name="patient_id" value=" <?= $session->get('user_id')?>">
        
        



            <button type="submit" class="btn btn-primary">Request</button>
        </form>
    </div>
</div>