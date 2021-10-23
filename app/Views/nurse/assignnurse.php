<div class="container">
            <h1 style="text-align: center;">Nurse Assign!</h1>

            <form>
                <div class="form-group m-3">
                    <label for=nursename">Nurse Name<i class="text-danger">*</i></label>

                    <input type="text" class="form-control" id="nursename"
                        placeholder="Enter Nurse Name">
                    <small id="nursename" class="form-text"></small>
                </div>
                <div class="form-group m-3">
                    <label for="pateintname">Patient Name<i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="pateintname"
                        placeholder="Enter Patient Name">
                </div>
                <div class="form-group m-3">
                    <label for="departmentname">Department Name<i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="departmentname"
                        placeholder="Enter Department">
                </div>
                <div class="form-group form-check m-3">
                    <input type="checkbox" class="form-check-input" id="check1">
                    <label class="form-check-label" for="check">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary m-3">Submit</button>
            </form>
        </div>
    