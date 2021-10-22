<div class="container" style="background-color: rgb(253, 253, 253);">
    <!-- Add Prescription Here -->
    <div style="text-align: center; margin: 4px;">
        <h1>Add Prescription!</h1>
    </div>
    <form>
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group mt-3 mb-3">
                    <!-- <label for="patient_id">Patient ID</label> -->
                    <input type="text" class="form-control" id="patient_id" name="patient_id" placeholder="patient_id">
                </div>




                <div class="form-group mb-3">
                    <!-- <label for="bp">Blood Pressure</label> -->
                    <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                </div>
                <div class="form-group mb-3">
                    <!-- <label for="Weight">Weight</label> -->
                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                </div>
                <div class="form-group mb-3">
                    <!-- <label for="refference">Refference</label> -->
                    <input type="text" class="form-control" id="refference" name="refference" placeholder="Refference">
                </div>
                <div class="form-group mb-3">
                    <label for="type">Type</label>
                    Old <input type="radio" name="type" value="new">
                    New<input type="radio" name="type" value="old">
                    <span class="red">
                </div>




                <div class="form-group mb-3">
                    <!-- <label for="appointment_id">Appointment Id</label> -->
                    <input type="text" class="form-control" id="appointment_id" name="appointment_id" placeholder="Appointment Id">
                </div>
                <div class="form-group mb-3">
                    <!-- <label for="date">Date</label> -->
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                </div>
                <div class="form-group mb-3">
                    <!-- <label for="hospital_name">Hospital Name</label> -->
                    <input type="text" class="form-control" id="hospital_name" name="hopspital_name" placeholder="Hospital
                                    Name">
                </div>
                <div class="form-group mb-3">
                    <!-- <label for="address">Address</label> -->
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
            </div>
            <div class="form-group col-md-6">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr class="bg-primary">
                            <th width="160">Medicine Name</th>
                            <th width="160">Medicine Type</th>
                            <th>Instruction</th>
                            <th width="80">Days</th>

                        </tr>
                    </thead>
                    <tbody id="medicine">
                        <tr>
                            <td><input type="text" name="medicine_name[]" autocomplete="off" class="medicine form-control" placeholder="Medicine Name"></td>
                            <td><input type="text" name="medicine_type[]" autocomplete="off" class="form-control" placeholder="Medicine Type"></td>
                            <td><textarea name="medicine_instruction[]" class="form-control" placeholder="Instruction"></textarea></td>
                            <td><input type="text" name="medicine_days[]" autocomplete="off" class="form-control" placeholder="Days"></td>


                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-danger">
                            <th width="230">Diagnosis</th>
                            <th>Instruction</th>

                        </tr>
                    </thead>
                    <tbody id="diagnosis">
                        <tr>
                            <td><input type="text" name="diagnosis_name[]" autocomplete="off" class="form-control" placeholder="Diagnosis"></td>
                            <td><textarea name="diagnosis_instruction[]" class="form-control" placeholder="Instruction"></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-group col-md-4 mb-3 mt-3">
                <label for="fees">Visiting Fees</label>
                <input type="text" class="form-control" id="fees" name="fees" placeholder="Visiting Fees">
            </div>
            <div class="form-group col-md-4 mb-3">
                <label for="patient_notes">Patient Notes</label>
                <input type="text" class="form-control" id="patient_notes" name="patient_notes" placeholder="Patient  Notes">

            </div>


            <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>