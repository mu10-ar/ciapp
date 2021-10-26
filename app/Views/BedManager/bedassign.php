<h1 style="text-align: center; margin:  4px; color:brown">Assign Bed!</h1>

<div class="container">
    <form action="" method="post">

        <div class="mb-3">
        <?php
            $session=session();?>
                <label for="patientname">Patient Name</label>
                <select id="patientname" name="patient_id" class="form-control">
                    
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
                    ?>


                </select>
        </div>
        <div class="mb-3">
        <?php
            $session=session();?>
                <label for="patientname">Bed No</label>
                <select id="patientname" name="assigned_bed" class="form-control">
                    
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('patient_id')) {

                                    echo $validation->getError('patient_id');
                                }?>
                    </span>
                    <?php
                        
                        foreach ($bed as $bed) {?>



                    <option value="<?=$bed['bed_id']?>"> bed no <?=$bed['bed_id']?>
                    </option>
                    <?php ;} 
                    ?>


                </select>
        </div>
      
        
        

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
     
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>