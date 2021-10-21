<div style="text-align: center;">
    <h2>Add Appointment</h2>
</div>
<div class="row">
    <!-- Form For Adding Appointment -->
    <div class="container" style="display: flex;">
        <form action="" method="post">

            <div class="form-group">
                <label for="doctorname">patient Name</label>
                <select id="doctorname" name="id" class="form-control">
                    <option selected>Choose...</option>
                    <?php
                        
                        foreach ($patient as $patient) {?>



                    <option value="<?=$patient['id']?>"><?=$patient['firstname'].' '.$patient['lastname']?>
                    </option>
                    <?php ;}?>

                </select>
            </div>

            <div class="form-group">
                <label for="inputdepartmentname">Department Name</label>
                <select id="inputdepartmentname" name="department_name" class="form-control">
                    <option selected>Choose...</option>
                    <?php
                        
                        foreach ($department as $department) {?>



                    <option value="<?=$department['department_name']?>"><?=$department['department_name']?>
                    </option>
                    <?php ;}?>

                </select>
            </div>
            <div class="form-group">
                <label for="doctorname">Doctor Name</label>
                <select name="doctor_name" id="doctorname" class="form-control">
                    <option selected>Choose...</option>
                    <?php
                        
                        foreach ($doctor as $doctor) {?>



                    <option value="<?=$doctor['firstname'].''.$doctor['lastname']?>">
                        <?=$doctor['firstname'].' '.$doctor['lastname']?>
                    </option>
                    <?php ;}?>

                </select>
            </div>
    </div>

    <div class="form-group ">
        <label for="appointmentdate">Appointment Date:</label>
        <input type="datetime-local" class="form-control" id="appointmentdate" name="appointment_date">
    </div>


    <div class="form-group">
        <div class="form-group">
            <label for="problem">Problem</label>
            <input type="text" name="problem" class="form-control" placeholder="Problems Here!">
        </div>
    </div>



    <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>