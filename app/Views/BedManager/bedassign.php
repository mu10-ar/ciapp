<h1 style="text-align: center; margin:  4px; color:brown">Assign Bed!</h1>

<div class="container">
    <form action="" method="">

        <div class="mb-3">
            <label for="patient_id" class="form-label">Patient Id:</label>
            <input type="text" class="form-control" id="patient_id" placeholder="P0QR4L6">
        </div>
        <div class="mb-3">
            <label for="roomname" class="form-label">Room Name:</label>
            <input type="text" class="form-control" id="roomname" placeholder="Cardiac-Ward-01">
        </div>
        <div class="mb-3">
            <label for="bednumber" class="form-label">Bed Number:</label>
            <input type="number" class="form-control" id="bednumber" placeholder="Bed Number">
        </div>
        <div class="mb-3">
            <label for="assigndate" class="form-label">Assign Date:</label>
            <input type="date" class="form-control" id="assigndate" placeholder="01-10-2001">
        </div>
        <div class="mb-3">
            <label for="dischargedate" class="form-label">Discharge Date:</label>
            <input type="date" class="form-control" id=dischargedate" placeholder="01-10-2001">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="">
            <label for="status" class="form-label">Status: </label>

            Active <input type="radio" class="" id="radio-inline">
            Inavtive <input type="radio" class="" id="radio-inline">
        </div>
        <button type="button" class="btn btn-primary">Add</button>
    </form>
</div>