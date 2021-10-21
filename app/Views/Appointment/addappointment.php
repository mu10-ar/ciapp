<div style="text-align: center;">
    <h2>Add Appointment</h2>
</div>
<!-- Form For Adding Appointment -->
<div class="container" style="display: flex;">
    <form action="" method="post">

        <div class="form-group">
            <label for="patient_id">Patient ID</label>
            <input type="text" name="patient_id" class="form-control" placeholder="patient_id">
        </div>

        <div class="form-group">
            <label for="inputdepartmentname">Department Name</label>
            <select id="inputdepartmentname" class="form-control">
                <option selected>Choose...</option>
                <option>d1</option>
                <option>d2</option>
                <option>d3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="doctorname">Doctor Name</label>
            <select id="doctorname" class="form-control">
                <option selected>Choose...</option>
                <option>d1</option>
                <option>d2</option>
                <option>d3</option>
            </select>
        </div>


        <div class="form-group ">
            <label for="appointmentdate">Appointment Date:</label>
            <input type="date" class="form-control" id="appointmentdate" name="appointmentdate">
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
</div>