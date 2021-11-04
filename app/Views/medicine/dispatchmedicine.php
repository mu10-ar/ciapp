<!-- Dispatch Medicine -->
<div class="container-fluid">
    <h1 style="text-align:center; margin:4px; ">Dispatch Medicine</h1>
</div>

<div class="container">
    <form action="" method="POST">
    <div class="form-group">
            <label for="category">Patient<i class="text-danger">*</i></label>
            <select class="form-control" name="patient_id" id="category" aria-placeholder="choose...">
            <?php foreach($patient as $patient):?>
                <option value="<?=$patient['id']?>"><?=$patient['firstname']." ".$patient['lastname']?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group">
            <label for="medicine_name">Medicine<i class="text-danger">*</i></label>
            <select id="medicine_name" name="medicine_id" class="form-control">
            <?php foreach($medicine as $medicine):?>
                <option value="<?=$medicine['medicine_id']?>"><?=$medicine['medicine_name']?></option>
                <?php endforeach?>
                </select>
                <?php
                if (isset($validation) && $validation->hasError('medicine_id')) {

                    echo $validation->getError('medicine_id');
                } ?>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity<i class="text-danger">*</i></label>
            <input type="number" id="quantity" name="qty" class="form-control">
            <?php
                if (isset($validation) && $validation->hasError('qty')) {

                    echo $validation->getError('qty');
                } ?>
         
        </div>
        <button type="submit" class="btn btn-primary">Add</button>




    </form>
</div>

