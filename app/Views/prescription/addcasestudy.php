<!--Add CaseStudy -->
<div style="text-align: center; margin:  4px;">
    <h1>Case Study!</h1>
</div>
<div class="container">

    <form method="post" action="">
        <div class="form-group">
            <label for="patient_id">Patient ID<i class="text-danger">*</i></label>
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
        <div class="form-group">
            <label for="food_allergy">Food Allergies<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="food_allergy" name="food_allergies" placeholder="food_allergy">

        </div>
        <div class="form-group">
            <label for="tendency_bleed">Tendency Bleed<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="tendency_bleed" name="tendency_bleed"
                placeholder="tendency_bleed">
        </div>
        <div class="form-group">
            <label for="heart_disease">Heart Disease<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="heart_disease" name="heart_disease" placeholder="heart_disease">
        </div>
        <div class="form-group">
            <label for="high_bp">High Blood Pressure<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="high_bp" name="high_bp" placeholder="high_bp">
        </div>
        <div class="form-group">
            <label for="diabetic">Diabetic<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="diabetic" name="diabetic" placeholder="Diabetic">
        </div>
        <div class="form-group">
            <label for="surgery">Surgery<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="surgery" name="surgery" placeholder="surgery">
        </div>
        <div class="form-group">
            <label for="accident">Accident<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="accident" name="accident" placeholder="Accident">
        </div>
        <div class="form-group">
            <label for="others">Others<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="others" name="others" placeholder="Others">
        </div>
        <div class="form-group">
            <label for="f_m_h">Family Medical History<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="f_m_h" name="family_medical_history"
                placeholder="Family Medical History">
        </div>
        <div class="form-group">
            <label for="current_medication">Current Medication<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="current_medication" name="current_medication"
                placeholder="current_medication">
        </div>
        <div class="form-group">
            <label for="female_pragnancy">Pragnancy<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="female_pragnancy" name="pragnancy" placeholder=" Pragnancy">
        </div>
        <div class="form-group">
            <label for="breast_feeding">Breast Feeding<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="breast_feeding" name="breast_feeding"
                placeholder="Breast Feeding">
        </div>
        <div class="form-group">
            <label for="health_insurance">Health Insurance<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="health_insurance" name="health_insurance"
                placeholder="Health Insurance">
        </div>
        <div class="form-group">
            <label for="low_income">Low Income<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="low_income" name="low_income" placeholder="Low Income">
        </div>
        <div class="form-group">
            <label for="refference">Refference<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="refference" name="reference" placeholder="reference">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>