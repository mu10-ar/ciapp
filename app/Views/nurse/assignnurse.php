
<h1 style="text-align: center; margin:  4px; color:brown">Add Medicine !</h1>
<div class="container">

    <form method="POST" action="">
   
        <div class="form-group">
            <label for="category">Patient<i class="text-danger">*</i></label>
            <select class="form-control" name="patient_id" id="category" aria-placeholder="choose...">
            <?php foreach($patient as $patient):?>
                <option value="<?=$patient['id']?>"><?=$patient['firstname']." ".$patient['lastname']?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group">
            <label for="category">nurse<i class="text-danger">*</i></label>
            <select class="form-control" name="nurse_id" id="category" aria-placeholder="choose...">
               <?php foreach($nurse as $nurse):?>
                <option value="<?=$nurse['id']?>"><?=$nurse['firstname']." ".$nurse['lastname']?></option>
                <?php endforeach?>
               
            </select>
        </div>

        <div class="form-group">
          <label for="description">Notes</label>
          <textarea name="notes" class="form-control" id="description" rows="3"></textarea>
        </div> 
        
        
        
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
    