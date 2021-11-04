<!-- Dispatch Medicine -->
<div class="container-fluid">
    <h1 style="text-align:center; margin:4px; ">Dispatch Medicine</h1>
</div>

<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label for="patient_id">Patient Name<i class="text-danger">*</i></label>
            <select id="patientname" name="patient_id" class="form-control">
                <option selected>Choose...</option>
            </select> <span class="red">
                <?php
                if (isset($validation) && $validation->hasError('patient_id')) {

                    echo $validation->getError('patient_id');
                } ?>
            </span>
        </div>
        <div class="form-group">
            <label for="medicine_name">Medicine<i class="text-danger">*</i></label>
            <select id="medicine_name" name="medicine_name" class="form-control">
                <option selected>Choose...</option>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity<i class="text-danger">*</i></label>
            <select id="quantity" name="quantity" class="form-control">
                <option selected>Choose...</option>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>




    </form>
</div>

