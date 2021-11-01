<div class="container" style="background-color: rgb(253, 253, 253);">
    <!-- Add Prescription Here -->
    <div style="text-align: center; margin: 4px;">
        <h1>Add Prescription!</h1>
    </div>
    <form id="form_id" method="post" action="">
        <div class="form-row">
            <div class="col-md-4">
            <div class="form-group">
            <label for="patient_id">Patient Name<i class="text-danger">*</i></label>
            <select id="patientname" name="patient_id" class="form-control">
                <option selected>Choose...</option>

                <?php
                        
                        foreach ($patient as $patient) { ?>



                <option value="<?=$patient['id']?>"><?=$patient['firstname'].' '.$patient['lastname']?> </option>


                <?php ;}?>

            </select> <span class="red">
                <?php
                                if (isset($validation)&& $validation->hasError('patient_id')) {

                                    echo $validation->getError('patient_id');
                                }?>
            </span>
        </div>




                <div class="form-group mb-3">
               
                    <label for="bp">Blood Pressure</label>  <i class="text-danger">*</i>
                    <input type="text" class="form-control" id="bp" name="blood_pressure" placeholder="Blood Pressure">
                </div>
                <div class="form-group mb-3">
                    <label for="Weight">Weight</label> 
                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                </div>
             
         

                <div class="form-group mb-3">
                    <label for="date">Date</label>  <i class="text-danger">*</i>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                </div>

             
            </div>
            <hr>
            
            <div class="container">
            <h3 class="my-4">Medicine</h3>
            <div class="forn-group col-md-4 mb3">
                <label for="medicine">Add Medicine </label>  <i class="text-danger">*</i>
                <input type="text" class="form-control" name="medicine" placeholder="Add medicine here!">
            </div>
           
            <div class="forn-group col-md-4 mb3">
                <label for="medicine_d">Medicine Days</label> <i class="text-danger">*</i>
                <input type="text" class="form-control" name="medicine_days" placeholder="how many days?">
            </div>
            <hr>
            <h3>Diagnosis</h3>
            <div class="forn-group col-md-4 mb3">
                <label for="diagnosis">Diagnosis</label>  <i class="text-danger">*</i>
                <input type="text" class="form-control" name="diagnosis" placeholder="diagnosis here!">
            </div>
            <div class="forn-group col-md-4 mb3">
                <label for="diagnosis_instruc">Diagnosis Instruction</label>
                <input type="text" class="form-control" name="diagnosis_instruction" placeholder="Diagnosis Instructions here!">
            </div>
            <hr>

            <div class="form-group col-md-4 mb-3 mt-3">
                <label for="fees">Visiting Fees<i class="text-danger">*</i></label>
                <input type="text" class="form-control" id="fees" name="visiting_fee" placeholder="Visiting Fees">
            </div>
            <div class="form-group col-md-4 mb-3">
                <label for="patient_notes">Patient Notes</label>
                <input type="text" class="form-control" id="patient_notes" name="patient_notes" placeholder="Patient  Notes">

            </div>
            </div>
            


            <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>