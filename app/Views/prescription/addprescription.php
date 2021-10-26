<div class="container" style="background-color: rgb(253, 253, 253);">
    <!-- Add Prescription Here -->
    <div style="text-align: center; margin: 4px;">
        <h1>Add Prescription!</h1>
    </div>
    <form id="form_id">
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group mt-3 mb-3">
                <i class="text-danger">*</i>
                    <label for="patient_id">Patient ID</label>
                    <input type="text" class="form-control" id="patient_id" name="patient_id" placeholder="patient_id">
                </div>




                <div class="form-group mb-3">
                <i class="text-danger">*</i>
                    <label for="bp">Blood Pressure</label>
                    <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                </div>
                <div class="form-group mb-3">
                    <label for="Weight">Weight</label>
                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                </div>
                <div class="form-group mb-3">
                    <label for="refference">Refference</label>
                    <input type="text" class="form-control" id="refference" name="refference" placeholder="Refference">
                </div>
                <div class="form-group mb-3">
                    <i class="text-danger">*</i>
                    <label for="type">Type</label>
                    Old <input type="radio" name="type" value="new">
                    New<input type="radio" name="type" value="old">
                    <span class="red">
                </div>

                <div class="form-group mb-3">
                    <label for="appointment_id">Appointment Id</label>
                    <i class="text-danger">*</i>
                    <input type="text" class="form-control" id="appointment_id" name="appointment_id" placeholder="Appointment Id">
                </div>
                <div class="form-group mb-3">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                </div>

                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
            </div>
            <hr>
            <h3>Medicine</h3>
            <div class="forn-group col-md-4 mb3">
                <label for="medicine">Add Medicine </label>
                <input type="text" class="form-control" name="medicine" placeholder="Add medicine here!">
            </div>
            <div class="forn-group col-md-4 mb3">
                <label for="medicine_c">Medicine Category </label>
                <input type="text" class="form-control" name="medicine_c" placeholder="medicine  category here!">
            </div>
            <div class="forn-group col-md-4 mb3">
                <label for="medicine_d">Medicine Days</label>
                <input type="text" class="form-control" name="medicine_d" placeholder="how many days?">
            </div>
            <hr>
            <h3>Diagnosis</h3>
            <div class="forn-group col-md-4 mb3">
                <label for="diagnosis">Diagnosis</label>
                <input type="text" class="form-control" name="diagnosis" placeholder="diagnosis here!">
            </div>
            <div class="forn-group col-md-4 mb3">
                <label for="diagnosis_instruc">Diagnosis Instruction</label>
                <input type="text" class="form-control" name="diagnosis_instruc" placeholder="Diagnosis Instructions here!">
            </div>
            <hr>

            <div class="form-group col-md-4 mb-3 mt-3">
                <label for="fees">Visiting Fees<i class="text-danger">*</i></label>
                <input type="text" class="form-control" id="fees" name="fees" placeholder="Visiting Fees">
            </div>
            <div class="form-group col-md-4 mb-3">
                <label for="patient_notes">Patient Notes</label>
                <input type="text" class="form-control" id="patient_notes" name="patient_notes" placeholder="Patient  Notes">

            </div>


            <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>