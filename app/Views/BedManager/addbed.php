<h1 style="text-align: center; margin:  4px; color:brown">Add Bed!</h1>

<div class="container">
    <form action="" method="post">

        <div class="form-group">
            <label for="inputdepartmentname">Department Name<i class="text-danger">*</i></label>
            <select id="inputdepartmentname" name="department_id" class="form-control">
                <span class="red">
                    <?php 
                                if (isset($validation)&& $validation->hasError('department_name')) {

                                    echo $validation->getError('department_name');
                                }?>
                </span>

                <?php
                        
                        foreach ($department as $department) {?>

                <option value="<?=$department['department_id']?>"><?=$department['department_name']?>
                </option>
                <?php ;}?>

            </select>
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Description:<i class="text-danger">*</i></label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <input type="hidden" value="1" name="status">
       
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>