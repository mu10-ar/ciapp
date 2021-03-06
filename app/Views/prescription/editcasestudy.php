<!--Add CaseStudy -->
<div style="text-align: center; margin:  4px;">
    <h1>Case Study!</h1>
</div>
<div class="container">

    <form method="post" action="">
        <div class="form-group">
            <label for="patient_id">Patient ID</label>
            <select id="patientname" name="patient_id" class="form-control">
                <option selected value="<?=$casestudy['id']?>"><?=$casestudy['firstname'].' '.$casestudy['lastname']?>
                </option>




            </select> <span class="red">
                <?php 
                                if (isset($validation)&& $validation->hasError('patient_id')) {

                                    echo $validation->getError('patient_id');
                                }?>
            </span>
        </div>
        <div class="form-group">
            <label for="food_allergy">Food Allergies</label>
            <input type="text" class="form-control" id="food_allergy" name="food_allergies" placeholder="food_allergy"
                value="<?=$casestudy['food_allergies']?>">

        </div>
        <div class="form-group">
            <label for="tendency_bleed">Tendency Bleed</label>
            <input type="text" class="form-control" id="tendency_bleed" name="tendency_bleed"
                placeholder="tendency_bleed" value="<?=$casestudy['tendency_bleed']?>">
        </div>
        <div class="form-group">
            <label for="heart_disease">Heart Disease</label>
            <input type="text" class="form-control" id="heart_disease" name="heart_disease" placeholder="heart_disease"
                value="<?=$casestudy['heart_disease']?>">
        </div>
        <div class="form-group">
            <label for="high_bp">High Blood Pressure</label>
            <input type="text" class="form-control" id="high_bp" name="high_bp" placeholder="high_bp"
                value="<?=$casestudy['high_bp']?>">
        </div>
        <div class="form-group">
            <label for="diabetic">Diabetic</label>
            <input type="text" class="form-control" id="diabetic" name="diabetic" placeholder="Diabetic"
                value="<?=$casestudy['diabetic']?>">
        </div>
        <div class="form-group">
            <label for="surgery">Surgery</label>
            <input type="text" class="form-control" id="surgery" name="surgery" placeholder="surgery"
                value="<?=$casestudy['surgery']?>">
        </div>
        <div class="form-group">
            <label for="accident">Accident</label>
            <input type="text" class="form-control" id="accident" name="accident" placeholder="Accident"
                value="<?=$casestudy['accident']?>">
        </div>
        <div class="form-group">
            <label for="others">Others</label>
            <input type="text" class="form-control" id="others" name="others" placeholder="Others"
                value="<?=$casestudy['others']?>">
        </div>
        <div class="form-group">
            <label for="f_m_h">Family Medical History</label>
            <input type="text" class="form-control" id="f_m_h" name="family_medical_history"
                placeholder="Family Medical History" value="<?=$casestudy['family_medical_history']?>">
        </div>
        <div class="form-group">
            <label for="current_medication">Current Medication</label>
            <input type="text" class="form-control" id="current_medication" name="current_medication"
                placeholder="current_medication" value="<?=$casestudy['current_medication']?>">
        </div>
        <div class="form-group">
            <label for="female_pragnancy">Pragnancy</label>
            <input type="text" class="form-control" id="female_pragnancy" name="pragnency" placeholder="Pragnancy"
                value="<?=$casestudy['pragnency']?>">
        </div>
        <div class="form-group">
            <label for="breast_feeding">Breast Feeding</label>
            <input type="text" class="form-control" id="breast_feeding" name="breast_feeding"
                placeholder="Breast Feeding" value="<?=$casestudy['breast_feeding']?>">
        </div>
        <div class="form-group">
            <label for="health_insurance">Health Insurance</label>
            <input type="text" class="form-control" id="health_insurance" name="health_insurance"
                placeholder="Health Insurance" value="<?=$casestudy['health_insurance']?>">
        </div>
        <div class="form-group">
            <label for="low_income">Low Income</label>
            <input type="text" class="form-control" id="low_income" name="low_income" placeholder="Low Income"
                value="<?=$casestudy['low_income']?>">
        </div>
        <div class="form-group">
            <label for="refference">Refference</label>
            <input type="text" class="form-control" id="refference" name="reference" placeholder="reference"
                value="<?=$casestudy['reference']?>">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>